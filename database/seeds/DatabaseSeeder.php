<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		$this->call('CountriesTableSeeder');
		$this->call('PermissionsTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('UsersTableSeeder');

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}
