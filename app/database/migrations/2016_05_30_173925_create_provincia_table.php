<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProvinciaTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provincia', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('id_pr');
			$table->integer('id_re');
			$table->string('str_descripcion');
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
		Schema::drop('provincia');
	}

}
