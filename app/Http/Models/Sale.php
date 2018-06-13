<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Sale extends Model
{

    public static function SaleGET()
    {	 
      $data["sale"] = DB::table('sale')->where('id', 'like', "1")->value('sale');
      $data["stat"] = ($data["sale"] / 500000) * 100;
      return $data;
    }

}
