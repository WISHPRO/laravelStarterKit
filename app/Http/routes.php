<?php
	use App\User;
	use App\Person;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

	Event::listen('auth.login', function($event)
	{
	//	echo 'user has logged in';exit;
	});
	Event::listen('auth.logout', function($event)
	{
	//	echo 'user has logged out';exit;
	});

	Route::get('/', [
		'as' => 'welcome.index', 'uses' => 'WelcomeController@index'
	]);

	Route::get('home', [
		'as' => 'home.index', 'uses' => 'HomeController@index'
	]);

	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);

	Route::get('mytestpage', function(){
		$user = User::find(1);
		dd($user->details->country);
		return Response::make('Hello kitty!');//->setTtl(60); // Cache 1 minute
	});
