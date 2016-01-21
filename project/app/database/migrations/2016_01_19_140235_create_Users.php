<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Persons',function($table)
		{
			$table->string('National_ID',13);
			$table->string('Username');
			$table->string('Title');
			$table->string('Name');
			$table->string('Surname');
			$table->date('Birthday');
			$table->string('Employee_ID',7);
			$table->integer('Position_ID');
			$table->integer('Department_ID');
			$table->integer('Division_ID');
			$table->integer('Type_ID');
			$table->string('Telphone',12);
			$table->string('Email');
			$table->string('Avatar');
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
		Schema::drop('Persons');
	}

}
