<?php

namespace App\Http\Controllers;
use App\Http\Models\Timer;

class TokenSale extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Timer = Timer::Get();

        $data["start"] = $Timer[0]->start;

        $data["title"]= 'Token Sale';

        return view('lending.tokensale', $data);
    }
}
