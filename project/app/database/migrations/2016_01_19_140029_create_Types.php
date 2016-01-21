<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Types',function($table)
		{
			$table->increments('ID');
			$table->string('Name');
			$table->double('LimitUser',9,2);
			$table->double('LimitSpouse',9,2);
			$table->double('LimitChild',9,2);
			$table->double('LimitParents',9,2);
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
		Schema::drop('Types');
	}

}
