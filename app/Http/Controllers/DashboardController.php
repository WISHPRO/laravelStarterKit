<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Permission;
use App\Role;

use Illuminate\Http\Request;

class DashboardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$userCount = User::all()->count();
		return \Theme::view('dashboard.index',[
			'userCount' => $userCount
		]);
	}

	public function users()
	{
		$users = User::all();
		return \Theme::view('dashboard.users',[
			'users' => $users
		]);
	}
	public function roles()
	{
		$roles = Role::all();
		return \Theme::view('dashboard.roles',[
			'roles' => $roles
		]);
	}
	public function permissions()
	{
		$permissions = Permission::all();
		return \Theme::view('dashboard.permissions',[
			'permissions' => $permissions
		]);
	}

}
