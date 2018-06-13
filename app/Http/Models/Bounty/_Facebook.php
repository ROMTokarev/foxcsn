<?php

namespace App\Http\Models\Bounty;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Facebook\Facebook;


class _Facebook extends Model
{


	public static function CallBack()
    {

       $fb = new Facebook([
                           'app_id' => env('FACEBOOK_APP_ID'),
                           'app_secret' => env('FACEBOOK_APP_SECRET'),
                           'default_graph_version' => env('FACEBOOK_DEFAULT_GRAPH_VERSION')
                         ]);

$linkData = [
  'link' => 'http://www.example.com',
  'message' => 'User provided message',
  ];

try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->post('/me/feed', $linkData, "EAAEw8f4DkNYBAFcVWli3OfZAVSNrLdZBfgqlM42Nk7a4ZBImK9L0gnmvyjp6H3Kezr6WW9KLperhCsxep8OOvolkK3Cgm5ZAZAmDlm4BmBTePmjBTPwbZBKfG3tuSmefE4M7iQee5zCeycwJavLJdrgIN8a7TNGpEAVITruJe71eYqxVWsZAIaaWRzdwHof7NS4ZBZBiewqo2KTyKAJPoGFWH1TmnZAWX9d3EZD");
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$graphNode = $response->getGraphNode();

echo 'Posted with id: ' . $graphNode['id'];

       return $fb;
        
	}






	
}
