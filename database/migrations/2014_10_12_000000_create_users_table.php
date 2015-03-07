<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('person_id')->unsigned()->unique()->index();
			$table->foreign('person_id')->references('id')->on('persons');
			$table->string('email')->unique()->index();
			$table->string('username')->unique()->index();
			$table->string('password', 60);
			$table->string('confirmation_code');
			$table->boolean('is_confirmed')->default(false);
			$table->string('display_name', 50)->nullable();
			$table->enum('notify', ['y', 'n'])->default('y');
			$table->date('last_login')->nullable();
			$table->boolean('is_online')->default(false);
			$table->boolean('is_active')->default(false);
			$table->date('last_active_time')->nullable();
			$table->rememberToken();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
