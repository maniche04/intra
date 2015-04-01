<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('todos',function($t){
			$t->increments('id');
			$t->string('title',150);
			$t->text('description',1000);
			$t->string('status',30);
			$t->integer('completion');
			$t->string('tags',200);
			$t->integer('owner_id');
			$t->date('deadline');
			$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
