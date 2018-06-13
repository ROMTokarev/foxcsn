<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Http\Models\Geth;
use App\Http\Models\Bounty;

class BalanceMOD extends Model
{
	public static function Chack($ID, $email)
    {	 

      $Account = Geth::GetMarketAccount($ID);

      if ($Account->FXNBalance == "")
      {
       $TokenBalance = 0;
      }
      else
      {
       $TokenBalance = $Account->FXNBalance;
      }

       $Bounty = Bounty::Stat($email);

       $BalanceBounty = 0;

       if($Bounty->TweetsStatus == 1)
       {
        $BalanceBounty = $BalanceBounty + $Bounty->Tweets;
       }

       if($Bounty->SlackStatus == 1)
       {
        $BalanceBounty = $BalanceBounty + $Bounty->Slack;
       }

       if($Bounty->FacebookStatus == 1)
       {
        $BalanceBounty = $BalanceBounty + $Bounty->Facebook;
       }

       if($Bounty->YoutubeStatus == 1)
       {
        $BalanceBounty = $BalanceBounty + $Bounty->Youtube;
       }

       if($Bounty->instagramStatus == 1)
       {
        $BalanceBounty = $BalanceBounty + $Bounty->instagram;
       }

       if($Bounty->BitcoinStatus == 1)
       {
        $BalanceBounty = $BalanceBounty + $Bounty->Bitcoin;
       }

       $data["BalanceBounty"] = $BalanceBounty;
       $data["TokenBalance"]  = $TokenBalance;
       $data["Total"]         = $BalanceBounty + $TokenBalance;
       $data["Bounty"]         = $Bounty;
       $data["Account"]         = $Account;

       return $data;

	}

    public static function UpdateBounty($email)
    {

       $AUpdate = [];
       $Bounty = Bounty::Stat($email);

       if($Bounty->TweetsStatus == 1)
       {
        $AUpdate["Tweets"] = 0;
        $AUpdate["TweetsStatus"] = 3;
       }

       if($Bounty->SlackStatus == 1)
       {
        $AUpdate["Slack"] = 0;
        $AUpdate["SlackStatus"] = 3;
       }

       if($Bounty->FacebookStatus == 1)
       {
        $AUpdate["Facebook"] = 0;
        $AUpdate["FacebookStatus"] = 3;
       }

       if($Bounty->YoutubeStatus == 1)
       {
        $AUpdate["Youtube"] = 0;
        $AUpdate["YoutubeStatus"] = 3;
       }

       if($Bounty->instagramStatus == 1)
       {
        $AUpdate["instagram"] = 0;
        $AUpdate["instagramStatus"] = 3;
       }

       if($Bounty->BitcoinStatus == 1)
       {
        $AUpdate["Bitcoin"] = 0;
        $AUpdate["BitcoinStatus"] = 3;
       }

        DB::table('bounty')
            ->where('email', "like", $email)
            ->update($AUpdate);

	}	 

    public static function UpdateMarket($ID)
    {
        DB::table('market')
            ->where('users_id', $ID)
            ->update(['FXNBalance' => 0]);
	}	 

}
