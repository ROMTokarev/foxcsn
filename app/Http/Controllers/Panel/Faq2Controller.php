<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Geth;
use Illuminate\Support\Facades\Auth;

use App\Http\Models\BalanceMOD;

class Faq2Controller extends Controller
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

      $data["title"]   = "FAQ";

        return base64_encode ( view('panel.faq', $data) );
    }
}
