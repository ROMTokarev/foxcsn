<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Timer extends Model
{


    public static function Get()
    {	 
      
      $Timer =  DB::table('timer')->where('id', "1")->get()->toArray();
      return $Timer;

 	}


}
