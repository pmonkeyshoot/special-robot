<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildren extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Children',function($table)
		{
			$table->string('National_ID',13);
			$table->string('Title');
			$table->string('Name');
			$table->string('Surname');
			$table->date('Birthday');
			$table->integer('ChildOrder');
			$table->string('User_ID',13);
			$table->timestamps();
		});
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Children');
	}

}
