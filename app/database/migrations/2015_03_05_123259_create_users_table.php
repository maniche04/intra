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
		Schema::create('Users',function($t){
			$t->increments('id');
			$t->string('firstname',20);
			$t->string('lastname',20);
			$t->string('username',20);
			$t->string('password',64);
			$t->timestamps();
			$t->string('remember_token',100);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop();
	}

}
