<?php

	use Illuminate\Database\Seeder;
	use App\Permission;

	class PermissionsTableSeeder extends Seeder {

		public function run()
		{
			$currentPermissions = Permission::all(array('name'))->lists('name');
			$routeCollection = Route::getRoutes();
			foreach ($routeCollection as $permission) {
				if (trim($permission->getName() != '')  && !in_array($permission->getName(),$currentPermissions) ) {
                        $perm = new Permission();
                        $perm->name = $permission->getName();
                        $perm->display_name = $permission->getPath();
                        $perm->description = $permission->getPath();
                        $perm->save();

				}
			}

		}

	}