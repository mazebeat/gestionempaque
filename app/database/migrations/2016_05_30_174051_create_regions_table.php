<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegionsTable extends Migration
{
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('regions', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('id_re');
			$table->string('str_descripcion');
			$table->string('str_romano');
			$table->integer('num_provincias');
			$table->integer('num_comunas');
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
		Schema::drop('regions');
	}
	
}
