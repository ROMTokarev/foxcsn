<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('lending.home', ['title' => 'FoxCasino']);
});

Route::get('/bounty', 'Bounty@Index');

Route::get('/tokensale', 'TokenSale@Index');


Route::get('/email', 'EmailController@Index');
Route::post('/email', 'EmailController@postIndex');


Auth::routes();
Route::get('/logout', 'Auth\LogoutController@index');


Route::get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@GetAuthenticate']);
Route::post('login', ['as' => 'login', 'uses' => 'Auth\AuthController@PostAuthenticate']);

Route::get('/user/activation/{token}', 'Auth\RegisterController@Activation');
Route::post('/user/activation/{token}', 'Auth\RegisterController@PostActivation');

////////////////////////////////////////////////////////////////////////////////

Route::get('/a/panel', 'Panel\Panel@Index');

Route::get('/a/home', 'Panel\HomeController@Index');
Route::post('/a/home', 'Panel\HomeController@Buy');
Route::get('/a/faq', 'Panel\Faq2Controller@Index');
Route::get('/a/account', 'Panel\AccountController@Index');
Route::post('/a/account/settings', 'Panel\AccountController@settings');
Route::post('/a/account/changepassword', 'Panel\AccountController@ChangePassword');
Route::post('/a/account/bounty', 'Panel\AccountController@Bounty');
Route::post('/a/account/ico', 'Panel\AccountController@ICO');

Route::get('/a/bounty', 'Panel\BountyController@Index');


//Route::get('/home', 'HomeController@Index')->name('home');
