<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return \Theme::view('dashboard.index');
	}

	public function users()
	{
		return \Theme::view('dashboard.users');
	}
	public function roles()
	{
		return \Theme::view('dashboard.roles');
	}
	public function permissions()
	{
		return \Theme::view('dashboard.permissions');
	}

}
