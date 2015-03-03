<?php
	$factory('App\User', [
		'first_name' => $faker->firstName,
		'last_name' => $faker->lastName,
		'email' => $faker->unique()->email,
		'password' => $faker->password,
		'gender' => $faker->randomElement(['Male', 'Female']),
		'activated' => $faker->boolean
	]);