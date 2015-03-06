<?php

	use Illuminate\Database\Seeder;
     use App\Role;
	use App\Permission;

	class RolesTableSeeder extends Seeder {

		public function run()
		{
			DB::table('roles')->truncate();
			$roles = array(
				"1" => array("name" => "superadmin", "display_name" => "Superadmin", "description" => "The God!"),
				"2" => array("name" => "admin", "display_name" => "Admin", "description" => "Look ma, they made me admin!"),
				"3" => array("name" => "user", "display_name" => "User", "description" => "The God created me or he exists because of me!?")
			);

			foreach ($roles as $role) {
				$role = Role::create([
					"name"         => $role['name'],
					"display_name" => $role['display_name'],
					"description"  => $role["description"]
				]);
				if($role->name == 'superadmin'){
					$permissions =  Permission::all();
					$role->attachPermissions($permissions);
				}
			}
		}

	}