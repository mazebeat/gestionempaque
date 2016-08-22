<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaltasTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faltas', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('id_falta');
			$table->string('id_usuario');
			$table->integer('falta_leve');
			$table->integer('falta_media');
			$table->integer('falta_grave');
			$table->string('nombre_usuario');
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
		Schema::drop('faltas');
	}

}
