<?php namespace App\Http\Controllers\Panel;

use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Models\Geth;

use App\Http\Models\BalanceMOD;

use App\Http\Models\Etherscan;

use App\Http\Models\Timer;
use App\Http\Models\Sale;



class HomeController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function Index()
    {
      $Timer = Timer::Get();
      $data["start"] = $Timer[0]->start;
      $start = substr($data["start"], 0, -3);
      $time  = time();

      $ID = Auth::user()->id;
      $data["email"] = Auth::user()->email;

      $Chack = BalanceMOD::Chack($ID, $data["email"]);
      $data["TokenBalance"] = $Chack["Total"];

      $data["Bonus"] = "100";
      $data["TokenCost"] = "1";
      $data["title"]   = "Token Sale";

      $data["ETHCost"] =  ceil(Geth::GetEthereumCost());

      $data["TokenCostETH"] = ceil(1/$data["ETHCost"]*1000000)/1000000;

  /*    if(($start-$time) > 0)
      {
        $data["EthBalance"] = 0;
        return base64_encode ( view('panel.home.Block', $data) );
      }
*/

      $data["Account"] = $Chack["Account"]->ETHAccount;

      $Etherscan = Etherscan::Chack($data["Account"], $ID);
      $data["tx"] = $Etherscan["tx"];
      $data["EthBalance"] = $Etherscan["Balance"];

      $data["TokenBuy"] = floor($data["EthBalance"]/$data["TokenCostETH"]);
      $data["TokenBonus"] = floor(($data["TokenBuy"]/100)*$data["Bonus"]);
      $data["TokenTotal"] = floor($data["TokenBuy"] + $data["TokenBonus"]);

      $data["chart"] = Sale::SaleGET()["stat"];


      return base64_encode ( view('panel.home.Active', $data) );
    }


    public function Buy()
    {

      $Timer = Timer::Get();
      $start = substr($Timer[0]->start, 0, -3);
      $time  = time();

/*      if(($start-$time) > 0)
      {
        $data["code"] = 402;
        return $data;
      }
*/

      $ID = Auth::user()->id;

      $Account = Geth::GetMarketAccount($ID);

      $to = "0x876851e7cC4aa61cDf143e7496745a4aceE81d5a";
      $Bonus = "100";
      $TokenCost = "1";

      $Etherscan = Etherscan::Chack($Account->ETHAccount, $ID);

      $EthBalance = $Etherscan["Balance"];

      $Buy = Geth::BuyFXN($Account, $to, $Bonus, $TokenCost, $EthBalance);

      if($Buy["code"] == 400) {
           Mail::send('emails.buy', ['Buy' => $Buy], function ($message) use ($Buy) {
                   $message->from('noreply@foxcsn.com', 'FoxCasino (No Reply)');
                   $message->to(Auth::user()->email, Auth::user()->name)->subject('Purchase of FXN token');
                  });
      }

      return $Buy;

    }

}
