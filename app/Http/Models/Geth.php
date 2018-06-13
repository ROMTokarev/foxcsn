<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Http\Models\Etherscan;


class Geth extends Model
{
	public static function RPCConnect($data)
    {	
		$SendGeth = curl_init();

        $data['jsonrpc'] = "2.0";
        $data['id'] = 0;
		
		curl_setopt($SendGeth, CURLOPT_URL, '127.0.0.1');
		curl_setopt($SendGeth, CURLOPT_PORT, '8545');
		curl_setopt($SendGeth, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($SendGeth, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
		curl_setopt($SendGeth, CURLOPT_POST, TRUE);
		curl_setopt($SendGeth, CURLOPT_POSTFIELDS, json_encode($data));
		
	    $JsonData = curl_exec($SendGeth);
        curl_close($SendGeth);

        return json_decode($JsonData, true);

	}

	public static function CGIConnect($data)
    {	

        $url = "http://localhost/cgi-bin";
		$SendGeth = curl_init();
		
		curl_setopt($SendGeth, CURLOPT_URL, $url. '/'.$data["url"]);
		curl_setopt($SendGeth, CURLOPT_PORT, '80');
		curl_setopt($SendGeth, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($SendGeth, CURLOPT_POST, TRUE);
		curl_setopt($SendGeth, CURLOPT_POSTFIELDS, $data["param"]);
		
	    $GethData = curl_exec($SendGeth);
        curl_close($SendGeth);

        return explode("CGIRPCDATA", $GethData)[1];

	}

    public static function randomPassword() 
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache

        for ($i = 0; $i < 8; $i++) 
        {
          $n = rand(0, $alphaLength);
          $pass[] = $alphabet[$n];
        }

        return implode($pass); //turn the array into a string
    }

    public static function MarketActivation($ETHPass, $ETHAccount, $ID) 
    {
        DB::table('market')->insert(
          ['users_id'   => $ID,
           'ETHPass'    => $ETHPass,
           'ETHAccount' => $ETHAccount]
        );


        DB::table('Etherscan')->insert(
          ['UID'   => $ID,
           'data'  => "",
           'hold'  => 0]
        );
    }

    public static function BountyActivation($Email) 
    {

       $time = time();

        DB::table('bounty')->insert(
          ['email' => "$Email",
           'Tweets' => "0",
           'TweetsData' => $time, 
           'TweetsStatus' => "0",
 	       'Slack' => "0",
           'SlackData' => $time,
           'SlackStatus' => "0",
           'Facebook' => "0",
           'FacebookData' => $time,
           'FacebookStatus' => "0",
           'Youtube' =>  "0",
           'YoutubeData' =>  $time,
           'YoutubeStatus' => "0",
           'instagram' => "0",
           'instagramData' => $time,
           'instagramStatus' => "0",
           'Bitcoin' => "0",
           'BitcoinData' =>  $time,
           'BitcoinStatus' =>  "0"]
        );
    }


    public static function GetMarketAccount($ID) 
    {
       $Account = DB::table('market')->where('users_id', "$ID")->first();
       return $Account;
    }

    public static function GetEthereumCost() 
    {
       $Account = DB::table('ethereum')->where('id', "1")->first();
       return $Account->cost;
    }



	public static function rpc_eth_getBalance($code, $tag)
    {
		$data = array();
		$data['method'] = "eth_getBalance";
		$data['params'] = [$code,$tag];
        
        $result = Geth::RPCConnect($data)["result"];

        return hexdec($result);

	}


	public static function rpc_web3_clientVersion()
    {
		$data = array();
		$data['method'] = "web3_clientVersion";
		$data['params'] = [];
        
        $result = Geth::RPCConnect($data)["result"];

        return $result;

	}

	public static function rpc_web3_sha3($code)
    {
		$data = array();
		$data['method'] = "web3_sha3";
		$data['params'] = [$code];
        
        $result = Geth::RPCConnect($data)["result"];

        return $result;

	}

	public static function rpc_net_version()
    {
		$data = array();
		$data['method'] = "net_version";
		$data['params'] = [];
        
        $result = Geth::RPCConnect($data)["result"];

        return $result;

	}

	public static function rpc_net_listening()
    {
		$data = array();
		$data['method'] = "net_listening";
		$data['params'] = [];
        
        $result = Geth::RPCConnect($data)["result"];

        return $result;

	}


	public static function rpc_net_peerCount()
    {
		$data = array();
		$data['method'] = "net_peerCount";
		$data['params'] = [];
        
        $result = Geth::RPCConnect($data)["result"];

        return $result;

	}

	public static function rpc_eth_protocolVersion()
    {
		$data = array();
		$data['method'] = "eth_protocolVersion";
		$data['params'] = [];
        
        $result = Geth::RPCConnect($data)["result"];

        return $result;

	}

	public static function rpc_eth_syncing()
    {
		$data = array();
		$data['method'] = "eth_syncing";
		$data['params'] = [];
        
        $result = Geth::RPCConnect($data);

        return $result;

	}


	public static function rpc_eth_coinbase()
    {
		$data = array();
		$data['method'] = "eth_coinbase";
		$data['params'] = [];
        
        $result = Geth::RPCConnect($data)["result"];

        return $result;

	}

	public static function rpc_eth_mining()
    {
		$data = array();
		$data['method'] = "eth_mining";
		$data['params'] = [];
        
        $result = Geth::RPCConnect($data)["result"];

        return $result;

	}

	public static function rpc_eth_hashrate()
    {
		$data = array();
		$data['method'] = "eth_hashrate";
		$data['params'] = [];
        
        $result = Geth::RPCConnect($data)["result"];

        return $result;

	}

	public static function rpc_eth_gasPrice()
    {
		$data = array();
		$data['method'] = "eth_gasPrice";
		$data['params'] = [];
        
        $result = Geth::RPCConnect($data)["result"];

        return $result;

	}

	public static function rpc_eth_accounts()
    {
		$data = array();
		$data['method'] = "eth_accounts";
		$data['params'] = [];
        
        $result = Geth::RPCConnect($data)["result"];

        return $result;

	}

	public static function rpc_eth_blockNumber()
    {
		$data = array();
		$data['method'] = "eth_blockNumber";
		$data['params'] = [];
        
        $result = Geth::RPCConnect($data)["result"];

        return $result;

	}


//////////////////////////////////////////////////////////////////////////



	public static function cgi_checkTokenBalances($val)
    {	
        $data["url"]   = "checkTokenBalances.cgi";
        $data["param"] = "adress=$val";

        return Geth::CGIConnect($data);
	}

	public static function cgi_sendTransaction($from, $to, $pass)
    {	
        $data["url"]   = "sendTransaction.cgi";
        $data["param"] = "from=$from&to=$to&pass=$pass";

        return Geth::CGIConnect($data);
	}

	public static function cgi_newAccount($pass)
    {	
        $data["url"]   = "newAccount.cgi";
        $data["param"] = "pass=$pass";

        return Geth::CGIConnect($data);
	}

	public static function cgi_transfer($FXNAddress, $tokens, $FXNBank, $pass)
    {	
        $data["url"]   = "transfer.cgi";
        $data["param"] = "FXNAddress=$FXNAddress&tokens=$tokens&FXNBank=$FXNBank&pass=$pass";

        return Geth::CGIConnect($data);
	}


/*	public static function cgi_eth_getBalance($acct, $ID)
    {	

       $Account = DB::table('market')->where('users_id', "$ID")->first();

       $Balance["FXN"] = $Account->FXNBalance;

       $Balance["ETH"] = Etherscan::Chack($acct, $ID)["Balance"];
     
        return $Balance;

	}
*/

	public static function BuyFXN($Account, $to, $Bonus, $TokenCost, $EthBalance)
    {	

     $ETHAccount = $Account->ETHAccount;
     $ETHPass    = $Account->ETHPass;
     $ID         = $Account->users_id;

     $Balance["FXN"] = DB::table('market')->where('users_id', "$ID")->first()->FXNBalance;

     $ETHCost = Geth::GetEthereumCost();

     $TokenCostETH = ceil(($TokenCost/$ETHCost)*1000000)/1000000;

     $data["TokenBuy"]   = floor($EthBalance/$TokenCostETH);
     $data["TokenBonus"] = floor(($data["TokenBuy"]/100)*$Bonus);
     $data["TokenTotal"] = floor(($data["TokenBuy"] + $data["TokenBonus"]));

     if ($data["TokenBuy"] < 5)
     {
       $data["code"]       = "402";
       return $data;
     }

     Geth::cgi_sendTransaction("$ETHAccount", "$to", "$ETHPass");

     $data["code"]       = "400";

     $TokenTotal = $data["TokenTotal"] + $Balance["FXN"];


     $sale = DB::table('sale')->where('id', 'like', "1")->value('sale');
     $saleTotal = $sale + $data["TokenTotal"];


     DB::table('sale')->where('id', 'like', "1")
                           ->update(['sale' => $saleTotal]);


     DB::table('market')->where('users_id', "$ID")
                           ->update(['FXNBalance' => $TokenTotal]);

     DB::table('market')->where('users_id', "$ID")
                           ->update(
                                    ['UpdateTime' => time(),
                                     'ETHBalance' => "0"]);

     DB::table('Etherscan')->where('UID', "$ID")
                              ->update(['hold' => 1]);

     return $data;


	}

	



	
}
