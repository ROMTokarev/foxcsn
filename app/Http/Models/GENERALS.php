<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GENERALS extends Model
{


    public static function Address($Address, $ID)
    {	 
      $Address = strip_tags($Address);
      $Address = str_replace(" ","",$Address);
      $Address = substr("$Address", 0, 42);

      $test = substr("$Address", 0, 2);

      if($test == "0x" &&  mb_strlen ($Address) == 42)
      {
          DB::table('users')
            ->where('id', 'like', "$ID")
            ->update(['Payment' => "$Address"]);

          return DB::table('users')->where('id', 'like', "$ID")->value('Payment');
      }

      return "error5269";

	}

public static function PasswordValidator(array $data)
{
  $messages = [
    'current_password.required' => 'Please enter current password',
    'password.required' => 'Please enter password',
  ];

  $validator = Validator::make($data, [
    'current_password' => 'required',
    'password' => 'required',
    'password_confirmation' => 'required|same:password',     
  ], $messages);

  return $validator;
}  


  public static function ChangePassword($request)
  {
    $request_data = $request->All();
    $validator = GENERALS::PasswordValidator($request_data);
    if($validator->fails())
    {
        $data["code"] = 402;
        $data["error"]  = $validator->getMessageBag(); 
        return $data;
    }
    else
    {  
      $current_password = Auth::User()->password;           
      if(Hash::check($request_data['current_password'], $current_password))
      {           
        $user_id = Auth::User()->id; 
        $password = Hash::make($request_data['password']);

        DB::table('users')
            ->where('id', $user_id)
            ->update(['password' => "$password"]);

        Auth::logout();
        $data["code"] = 400;
        return $data;
 
      }
      else
      {  
        $data["code"] = 402;
        $data["error"]  = 'Please enter correct current password'; 
        return $data;
   
      }
    }        
  }




}
