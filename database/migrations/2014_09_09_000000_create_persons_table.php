<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('persons', function(Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 60)->nullable();
            $table->string('last_name', 60)->nullable();
            $table->timestamp('dob')->nullable();
		  $table->text('bio')->nullable();
            $table->string('avatar')->nullable();
		  $table->string('city')->nullable();
		  $table->string('state')->nullable();
		  $table->integer('country_id')->unsigned()->index();
		  $table->foreign('country_id')->references('id')->on('countries');
		  $table->string('postal_code')->nullable();
		  $table->enum('gender', array('m', 'f', 'n'))->default('n');// m: male, f: female, n: not specified
		  $table->string('primary_email')->nullable();
		  $table->string('secondary_email')->nullable();
		  $table->string('mobile_number')->nullable();
		  $table->string('telephone_number')->nullable();
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
		Schema::drop('persons');
	}

}
