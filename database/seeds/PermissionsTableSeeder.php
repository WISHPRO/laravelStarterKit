<?php

	use Illuminate\Database\Seeder;
	use App\Permission;

	class PermissionsTableSeeder extends Seeder {

		public function run()
		{
			DB::table('permissions')->truncate();
			$currentPermissions = Permission::all(array('name'))->lists('name');
			$routeCollection = Route::getRoutes();
			foreach ($routeCollection as $permission) {
				if (trim($permission->getName() != '')  && !in_array($permission->getName(),$currentPermissions) && !starts_with($permission->getName(),'debugbar') ) {
                        $perm = new Permission();
                        $perm->name = $permission->getName();
                        $perm->display_name = $permission->getPath();
                        $perm->description = $permission->getPath();
                        $perm->save();

				}
			}

		}

	}