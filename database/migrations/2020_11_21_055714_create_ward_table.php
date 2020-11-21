<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWardTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ward', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('_name', 50);
			$table->string('_prefix', 20)->nullable();
			$table->integer('_province_id')->unsigned()->nullable();
			$table->integer('_district_id')->unsigned()->nullable();
			$table->index(['_province_id','_district_id'], '_province_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ward');
	}

}
