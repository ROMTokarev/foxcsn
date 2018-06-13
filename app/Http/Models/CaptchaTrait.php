<?php

namespace App\Http\Models;

use ReCaptcha\ReCaptcha;
use Illuminate\Database\Eloquent\Model;

class CaptchaTrait extends Model
{
	public static function captchaCheck($response)
    {
      $remoteip = $_SERVER['REMOTE_ADDR'];
      $secret   = env('RE_CAP_SECRET');

      $recaptcha = new ReCaptcha($secret);
      $resp = $recaptcha->verify($response, $remoteip);
      if ($resp->isSuccess()) {
          return 1;
      } else {
          return 0;
      }     
	}
}
