<?php namespace App\Services;

use App\User;
use App\Person;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'first_name' => 'required|max:255',
			'last_name' => 'required|max:255',
			'username' => 'required|unique:users',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		$person = Person::create([
			'country_id' => '1',
			'first_name' => $data['first_name'],
			'last_name' => $data['last_name']
		]);
		$user = User::create([
			'person_id'=>$person->id,
			'username'=> $data['username'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
		$user->setRole('user');
		return $user;
	}

}
