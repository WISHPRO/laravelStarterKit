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

		$browsershot = new Spatie\Browsershot\Browsershot();
		$browsershot
			->setURL('http://www.yahoo.com')
			->setWidth('1024')
			->setHeight('768')
			->save(storage_path().'/arstechnica-browsershot.jpg');
		exit;
		$sentence = 'Marie was enthusiastic about the upcoming trip. Her brother was also passionate about her leaving - he would finally have the house for himself.';
		echo SentimentAnalysis::decision($sentence).'<br/>';
		print_r(SentimentAnalysis::scores($sentence));
		exit;

		$user = User::find(1);
		dd($user->details->country);
		return Response::make('Hello kitty!');//->setTtl(60); // Cache 1 minute
	});
