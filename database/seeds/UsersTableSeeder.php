<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\User;
use App\Person;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->truncate();
        // TestDummy::times(20)->create('App\Post');
        $person = Person::create([
             'country_id' => '1',
             'first_name' => 'Super',
             'last_name' => 'Admin'
        ]);
        $user = User::create([
             'person_id'=>$person->id,
             'username'=> 'superadmin',
             'email' => 'superadmin@example.com',
             'password' => bcrypt('superadmin'),
        ]);
        $user->setRole('superadmin');

        $person = Person::create([
             'country_id' => '1',
             'first_name' => 'Admin',
             'last_name' => 'User'
        ]);
        $user = User::create([
             'person_id'=>$person->id,
             'username'=> 'admin',
             'email' => 'admin@example.com',
             'password' => bcrypt('admin'),
        ]);
        $user->setRole('admin');

        $person = Person::create([
             'country_id' => '1',
             'first_name' => 'User',
             'last_name' => 'User'
        ]);
        $user = User::create([
             'person_id'=>$person->id,
             'username'=> 'user',
             'email' => 'user@example.com',
             'password' => bcrypt('user'),
        ]);
        $user->setRole('user');

        //TestDummy::times(20)->create('App\User');
    }

}