<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Geth;

use App\Http\Models\GENERALS;

use Illuminate\Support\Facades\Auth;

use App\Http\Models\BalanceMOD;
use App\Http\Models\LogStatistics;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {

      $ID = Auth::user()->id;
      $data["email"] = Auth::user()->email;

      $Chack = BalanceMOD::Chack($ID, $data["email"]);
      $data["TokenBalance"] = $Chack["Total"];
      $data["Bounty"] = $Chack["BalanceBounty"];
      $data["TokenSale"] = $Chack["TokenBalance"];

      $data["History"]  = LogStatistics::GetHistory($ID);

      $data["title"]   = "Account";

      return base64_encode ( view('panel.account', $data) );
    }



    public function settings(Request $request)
    {
      $PAddress    = $request->input('Address');

      $ID = Auth::user()->id;

      $Address  = GENERALS::Address($PAddress, $ID);

      if($PAddress == $Address) 
      {
       $data["code"] = 400;
       $data["Address"] = $Address;
      }

      if($PAddress != $Address) 
      {
       $data["code"] = 402;
       $data["Address"] = "ERROR";
      }


      return  $data;
    }




  public function ChangePassword(Request $request)
    {
        $data = GENERALS::ChangePassword($request);
        return $data;
    }


  public function Bounty()
    {

      $Withdrawal = false;

      if($Withdrawal == false)
      {
        $data["code"] = 402;
        return $data;
      }

      $FXNAddress = Auth::user()->Payment;

      $test = substr("$FXNAddress", 0, 2);

      if($test != "0x")
      {
        $data["code"] = 403;
        return $data;
      }


      $ID = Auth::user()->id;
      $data["email"] = Auth::user()->email;

      $Chack = BalanceMOD::Chack($ID, $data["email"]);
      $data["tokens"] = $Chack["BalanceBounty"];

      if($data["tokens"] == 0)
      {
        $data["code"] = 404;
        return $data;
      }

      $FXNBank    = "0xb1d0eac9155cbc181015fed99aee179a6f9895b8";
      $pass       = "GVHbmV";

      $UpdateBounty = BalanceMOD::UpdateBounty($data["email"]);
      $transfer   = Geth::cgi_transfer($FXNAddress, $data["tokens"], $FXNBank, $pass);

      $data["code"] = 400;
      return $data;

    }

  public function ICO()
    {

      $Withdrawal = false;

      if($Withdrawal == false)
      {
        $data["code"] = 402;
        return $data;
      }

      $FXNAddress = Auth::user()->Payment;

      $test = substr("$FXNAddress", 0, 2);

      if($test != "0x")
      {
        $data["code"] = 403;
        return $data;
      }


      $ID = Auth::user()->id;
      $data["email"] = Auth::user()->email;

      $Chack = BalanceMOD::Chack($ID, $data["email"]);
      $data["tokens"] = $Chack["TokenBalance"];

      if($data["tokens"] == 0)
      {
        $data["code"] = 404;
        return $data;
      }

      $FXNBank    = "0xd4e2b71869613fec682d33711129987a6df48419";
      $pass       = "NXvKug";

      $UpdateMarket = BalanceMOD::UpdateMarket($ID);
      $transfer   = Geth::cgi_transfer($FXNAddress, $data["tokens"], $FXNBank, $pass);

      $data["code"] = 400;
      return $data;

    }

}
