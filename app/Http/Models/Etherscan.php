<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Etherscan extends Model
{

	public static function Connect($account)
    {	

        $url = "http://api.etherscan.io/api?module=account&action=txlist&address=$account&startblock=0&endblock=99999999&sort=asc&apikey=".env('ETHERSCAN_KEY');
		$SendETHERSCAN = curl_init();
		
		curl_setopt($SendETHERSCAN, CURLOPT_URL, $url);
		curl_setopt($SendETHERSCAN, CURLOPT_PORT, '80');
		curl_setopt($SendETHERSCAN, CURLOPT_RETURNTRANSFER, TRUE);
		
	    $ETHERSCANData = curl_exec($SendETHERSCAN);
        curl_close($SendETHERSCAN);

        return $ETHERSCANData;

	}


	public static function Balance($value, $acc)
    {	
        $Bal = 0;

        if($value["status"] == 0) {return $Bal;}

        foreach ($value["result"] as $tx) 
        {
          if($tx["isError"] == 0)
          {
            if($tx["confirmations"] > 12)
            {
              if($acc == $tx["from"])
              {
                $Bal = $Bal - $tx["value"];
                $Bal = $Bal - ($tx["gasUsed"]*$tx["gasPrice"]);  
              }

              if($acc != $tx["from"])
              {
                $Bal = $Bal + $tx["value"];
              }

            }
          }
        }
       
        return (float)bcdiv($Bal,'1000000000000000000',18);
	}

	public static function Chack($acct, $ID)
    {	

       $Account = DB::table('market')->where('users_id', "$ID")->first();
       $time    = time();


       if ($Account->UpdateTime == "" || ($time - $Account->UpdateTime) >= 300)
       {

        $Etherscan = Etherscan::Connect($acct);

        DB::table('Etherscan')->where('UID', "$ID")
                              ->update(
                                    ['data' => $Etherscan,
                                     'hold' => 0]);

        $data["tx"] = json_decode($Etherscan, true);

        $data["Balance"] = Etherscan::Balance($data["tx"], $acct);



        DB::table('market')->where('users_id', "$ID")
                           ->update(
                                    ['UpdateTime' => time(),
                                     'ETHBalance' => $data["Balance"]]);
        return $data;

       }
       else
       {
         $Etherscan = DB::table('Etherscan')->where('UID', "$ID")->first();
         $data["tx"] = json_decode($Etherscan->data, true);

         if($Etherscan->hold == 1)
         {
           $data["Balance"] = 0;
         }

         if($Etherscan->hold == 0)
         {
           $data["Balance"] = Etherscan::Balance($data["tx"], $acct);
         }
         return $data;


       }

	}
}
