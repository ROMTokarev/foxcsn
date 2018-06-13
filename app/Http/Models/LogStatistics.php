<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LogStatistics extends Model
{


    public static function AddHistory($ID)
    {	 
      
      $StatBD =  DB::table('LogStatistics')->where('id_users', "$ID")->get()->toArray();

      $IP = $_SERVER['HTTP_CF_CONNECTING_IP'];

      $countBD = count($StatBD)-1;

      $Min = $StatBD[$countBD]->round;
      $Max = $StatBD[0]->round;

      $id_sort = 0;
      for ($i = 0; $i < $countBD+1; $i++) {   
          if ($i == 0) { 
              $id_sort = $StatBD[$i]->id_sort; 
          }  else { 
             if ($id_sort < $StatBD[$i]->id_sort) { 
                 $id_sort = $StatBD[$i]->id_sort; 
             } 
         }  
      } 
      $id_sort++;

      if($Min == $Max)
      {
        $Min++;
        $pre_id  = $StatBD[0]->pre_id;
  

          DB::table('LogStatistics')
            ->where('pre_id', "$pre_id")
            ->update([
                      'ip'      => "$IP",
                      'data'    => date(DATE_RFC822),
                      'round'   => "$Min",
                      'id_sort' => "$id_sort"]);
        
      }

     $key = array_search($Min, array_column($StatBD, 'round'));
     $round = $StatBD[$key]->round + 1;

     $pre_id  = $StatBD[$key]->pre_id;


          DB::table('LogStatistics')
            ->where('pre_id', "$pre_id")
            ->update([
                      'ip'      => "$IP",
                      'data'    => date(DATE_RFC822),
                      'round'   => "$round",
                      'id_sort' => "$id_sort"]);


 	}

    public static function GetHistory($ID)
    {
      $StatBD =  DB::table('LogStatistics')->where('id_users', "$ID")->get()->toArray();

      for ($i=0; $i < count($StatBD); $i++) { 
        $sortkey[$i]=$StatBD[$i]->id_sort;
      }

      arsort($sortkey);

      foreach ($sortkey as $key => $key) {
        $sorted[]=$StatBD[$key];
      }

      return $sorted;
    }

}
