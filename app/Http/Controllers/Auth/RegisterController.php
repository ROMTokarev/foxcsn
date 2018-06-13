<?php

namespace App\Http\Controllers\Auth;

use Mail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Models\EmailVerification;
use App\Http\Models\Geth;
use App\Http\Models\CaptchaTrait;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

       $data['captcha'] = CaptchaTrait::captchaCheck($data["g-recaptcha-response"]);

        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|max:20',

                'password_confirmation' => 'required|same:password',
                'g-recaptcha-response'  => 'required',
                'captcha'               => 'required|min:1'
        ],
            [
                'name.required'         => 'Name is required',
                'email.required'        => 'Email is required',
                'email.email'           => 'Email is invalid',
                'password.required'     => 'Password is required',
                'password.min'          => 'Password needs to have at least 6 characters',
                'password.max'          => 'Password maximum length is 20 characters',
                'g-recaptcha-response.required' => 'Captcha is required',
                'captcha.min'           => 'Wrong captcha, please try again.'
            ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

       $data['token'] = EmailVerification::getToken($data['email']);

       Mail::send('emails.activation', ['data' => $data], function ($message) use ($data) {
                   $message->from('noreply@foxcsn.com', 'FoxCasino (No Reply)');
                   $message->to($data['email'], $data['name'])->subject('Verify your email address');
                  });
      
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'verified' => 0,
            'email_token' => md5($data['token']),
        ]);
    }

    public function Activation($oldToken)
    {
      $data['Token']   = $oldToken;
      return view('auth.Activation', $data); 
    }

    public function PostActivation(Request $request)
    {

      $response = Input::get('g-recaptcha-response');
      $data['Token']   = Input::get('Token');

      if($response == "" ) 
      {
        $data['error']   = 'Captcha is required';
        return view('auth.Activation', $data);
      }

      $captcha = CaptchaTrait::captchaCheck($response);

      if($captcha != 1) 
      {
        $data['error']   = 'Wrong captcha, please try again.';
        return view('auth.Activation', $data);
      }

      $Activation = EmailVerification::Activation(md5($data['Token']));

       if($Activation === FALSE)
       {
        $data['error']   = 'Ooops! Something went wrong.';
        return view('auth.Activation', $data);
       }

       $ETHPass    = Geth::randomPassword();
       $ETHAccount = Geth::cgi_newAccount($ETHPass);

       Geth::MarketActivation($ETHPass, $ETHAccount, $Activation);
       $Email = EmailVerification::EmailUser($Activation);
       Geth::BountyActivation($Email);

       return redirect('/login')->
                  with('status', 'Activation code accepted');

    }

}
