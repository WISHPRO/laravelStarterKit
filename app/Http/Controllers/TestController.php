<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Spatie\Browsershot\Browsershot;
use App\User;

class TestController extends Controller {

	public function browsershot(){
		$browsershot = new Browsershot();
		$browsershot
			->setURL('http://www.yahoo.com')
			->setWidth('1024')
			->setHeight('768')
			->save(public_path().'/browsershot/arstechnica-browsershot.jpg');
		return '<img src="/browsershot/arstechnica-browsershot.jpg" />';
	}
	public function sentiment(){
		$sentence = 'Marie was enthusiastic about the upcoming trip. Her brother was also passionate about her leaving - he would finally have the house for himself.';
		echo \SentimentAnalysis::decision($sentence).'<br/>';
		print_r(\SentimentAnalysis::scores($sentence));
		exit;
	}
	public function httpcache(){
		$user = User::find(1);
		return \Response::make('Hello kitty!')->setTtl(60); // Cache 1 minute
	}

}
