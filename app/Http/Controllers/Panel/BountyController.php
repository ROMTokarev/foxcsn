<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Http\Models\BalanceMOD;

class BountyController extends Controller
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

       $data["Tweets"]    = ["tokens" => $Chack["Bounty"]->Tweets, 
                             "data"   => $Chack["Bounty"]->TweetsData, 
                             "status" => $Chack["Bounty"]->TweetsStatus];

       $data["Slack"]     = ["tokens" => $Chack["Bounty"]->Slack, 
                             "data"   => $Chack["Bounty"]->SlackData, 
                             "status" => $Chack["Bounty"]->SlackStatus];

       $data["Facebook"]  = ["tokens" => $Chack["Bounty"]->Facebook, 
                             "data"   => $Chack["Bounty"]->FacebookData,
                             "status" => $Chack["Bounty"]->FacebookStatus];

       $data["Youtube"]   = ["tokens" => $Chack["Bounty"]->Youtube,
                             "data"   => $Chack["Bounty"]->YoutubeData, 
                             "status" => $Chack["Bounty"]->YoutubeStatus];

       $data["instagram"] = ["tokens" => $Chack["Bounty"]->instagram, 
                             "data"   => $Chack["Bounty"]->instagramData,
                             "status" => $Chack["Bounty"]->instagramStatus];

       $data["Bitcoin"]   = ["tokens" => $Chack["Bounty"]->Bitcoin, 
                             "data"   => $Chack["Bounty"]->BitcoinData, 
                             "status" => $Chack["Bounty"]->BitcoinStatus];

       $data["title"]   = "Bounty";


       return base64_encode ( view('panel.bounty', $data) );
    }


}
