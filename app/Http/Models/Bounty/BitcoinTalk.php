<?php

namespace App\Http\Models\Bounty;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class BitcoinTalk extends Model
{

	public static function Connect($ID)
    {	

        $url = "https://bitcointalk.org/index.php?action=profile;u=";
		$BitcoinTalk = curl_init();
		
		curl_setopt($BitcoinTalk, CURLOPT_URL, $url. '' .$ID);
		curl_setopt($BitcoinTalk, CURLOPT_PORT, '443');
		curl_setopt($BitcoinTalk, CURLOPT_RETURNTRANSFER, TRUE);
		
	    $source = curl_exec($BitcoinTalk);
        curl_close($BitcoinTalk);

        return $source;

	}



	public static function AccauntCheck($ID)
    {
        $source = BitcoinTalk::Connect($ID);

        $BitcoinTalk['signature'] = explode('<div class="signature">', $source)[1];
        $BitcoinTalk['signature'] = explode('</div></td>', $BitcoinTalk['signature'])[0];
        $BitcoinTalk['signature'] = md5($BitcoinTalk['signature']);

        $BitcoinTalk['posts']     = explode('<td><b>Posts: </b></td>', $source)[1]; 
        $BitcoinTalk['posts']     = explode('</tr><tr>', $BitcoinTalk['posts'])[0];
        $BitcoinTalk['posts']     = preg_replace('/[^0-9]/', '', $BitcoinTalk['posts']);



        return $BitcoinTalk;
        
	}






	
}
