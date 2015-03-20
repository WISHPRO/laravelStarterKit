<?php
	use App\User;
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

	Route::group(['prefix' => 'test'], function()
	{
		Route::get('/', [
			'as' => 'test.index', 'uses' => 'TestController@index'
		]);
		Route::get('browsershot', [
			'as' => 'test.browsershot', 'uses' => 'TestController@browsershot'
		]);
		Route::get('sentiment', [
			'as' => 'test.sentiment', 'uses' => 'TestController@sentiment'
		]);
		Route::get('httpcache', [
			'as' => 'test.httpcache', 'uses' => 'TestController@httpcache'
		]);
	});

	Route::group(['prefix' => 'dashboard'], function()
	{
		Route::get('/', [
			'as' => 'dashboard.index', 'uses' => 'DashboardController@index', 'middleware' => 'auth'
		]);
		Route::get('users', [
			'as' => 'dashboard.users', 'uses' => 'DashboardController@users', 'middleware' => 'auth'
		]);
		Route::get('roles', [
			'as' => 'dashboard.roles', 'uses' => 'DashboardController@roles', 'middleware' => 'auth'
		]);
		Route::get('permissions', [
			'as' => 'dashboard.permissions', 'uses' => 'DashboardController@permissions', 'middleware' => 'auth'
		]);
	});

