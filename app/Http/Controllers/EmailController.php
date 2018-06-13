<?php namespace App\Http\Controllers;

use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\EmailModel;
use Validator;


class EmailController extends Controller {


    public function Index()
    {
      return redirect('/');
    }

    public function postIndex(Request $request)
    {
        $EmailSend    = EmailModel::Hash($request);

        if( $request->input('email')   == "" OR
            $request->input('name')    == "" OR
            $request->input('message') == "") return view('lending.email_error');

        if($EmailSend === FALSE) return view('lending.email_error');

        Mail::send('emails.touch', ['request' => $request], function ($message) use ($request) {
                   $message->from('noreply@foxcsn.com', 'FoxCasino (No Reply)');
                   $message->to('ask@foxcsn.com', '')->subject('Get in touch!');
                  });


        return view('lending.email_good');

    }	

}
