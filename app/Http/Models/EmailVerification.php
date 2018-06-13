<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EmailVerification extends Model
{
	public static function getToken($data)
    {	 
      return md5($data . ' ' . time() . ' ' . str_random(10));     
	}

    public static function Activation($token)
    {	 
       $id = DB::table('users')->where('email_token', 'like', $token)->value('id');

       if($id != "")
       {
          DB::table('users')
            ->where('id', $id)
            ->update(
                     ['verified' => 1,
                     'email_token' => '']);


          DB::table('LogStatistics')->insert([
                                               ['pre_id' => 1,  'id_users' => $id],
                                               ['pre_id' => 2,  'id_users' => $id],
                                               ['pre_id' => 3,  'id_users' => $id],
                                               ['pre_id' => 4,  'id_users' => $id],
                                               ['pre_id' => 5,  'id_users' => $id],
                                               ['pre_id' => 6,  'id_users' => $id],
                                               ['pre_id' => 7,  'id_users' => $id],
                                               ['pre_id' => 8,  'id_users' => $id],
                                               ['pre_id' => 9,  'id_users' => $id],
                                               ['pre_id' => 10, 'id_users' => $id]
                                             ]);

          return $id; 
       }  

       return FALSE;   
	}

    public static function EmailUser($id)
    {	 
       return DB::table('users')->where('id', 'like', "$id")->value('email');
 
	}
}
