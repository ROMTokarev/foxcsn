<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bounty extends Model
{
	public static function Stat($email)
    {	 
     return DB::table('bounty')->where('email', "$email")->first();;      
	}
}
