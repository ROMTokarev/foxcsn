<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EmailModel extends Model
{
	public static function Hash($request)
    {	 

      $email   = $request->input('email');
      $name    = $request->input('name');
      $message = $request->input('message');

      $EmailHash = md5($email. ' ' . $name. ' ' .$message);
      $email = DB::table('email')->where('hash', 'like', $EmailHash)->value('id');

      if($email == "")
      {
        DB::table('email')->insert(
          ['hash' => $EmailHash]
        );

        return TRUE; 
      }

      return FALSE;      
	}
}
