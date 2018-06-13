<?php

namespace App\Http\Controllers\Auth;

use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Models\LogStatistics;

use App\Http\Models\CaptchaTrait;

class AuthController extends Controller {

    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function GetAuthenticate()
    {

      if (Auth::check()) 
      { 
        $verified = Auth::user()->verified;

        if($verified == 0)
        {
          Auth::logout();
          $data['error']   = "You need to confirm your account. We have sent you an activation code, please check your email.";
        }

        if($verified == 1)
        {
          return redirect()->intended('/a/panel');
        }

      } 


      $data['title']   = "Log In";
      return view('auth.login', $data);
    }

    public function PostAuthenticate(Request $request)
    {

      $email    = $request->input('email');
      $password = $request->input('password');
      $response = Input::get('g-recaptcha-response');

      $data['title']   = "Log In";

      if($response == "" ) 
      {
        $data['error']   = 'Captcha is required';
        return view('auth.login', $data);
      }

      $captcha = CaptchaTrait::captchaCheck($response);

      if($captcha != 1) 
      {
        $data['error']   = 'Wrong captcha, please try again.';
        return view('auth.login', $data);
      }

      $remember = (Input::has('remember')) ? true : false;

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember))
        {
          if (Auth::attempt(['email' => $email, 'password' => $password, 'verified' => 1], $remember))
          {

           Mail::send('emails.login', ['data' => $data], function ($message) use ($data) {
                   $message->from('noreply@foxcsn.com', 'FoxCasino (No Reply)');
                   $message->to(Auth::user()->email, Auth::user()->name)->subject('Successful login');
                  });

            $ID = Auth::user()->id;
            $History  = LogStatistics::AddHistory($ID);

            return redirect()->intended('/a/panel');
          }

          Auth::logout();
          $data['error']   = "You need to confirm your account. We have sent you an activation code, please check your email.";

          return view('auth.login', $data);

        }

           $data["email"] = $email;
           Mail::send('emails.logno', ['data' => $data], function ($message) use ($data) {
                   $message->from('noreply@foxcsn.com', 'FoxCasino (No Reply)');
                   $message->to($data["email"])->subject('Unsuccessful login');
                  });

      $data['error']   = "Wrong login or password";
      return view('auth.login', $data);

    }

}
