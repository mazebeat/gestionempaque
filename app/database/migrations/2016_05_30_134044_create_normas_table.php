<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNormasTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('normas', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('id_norma');
			$table->string('nom_norma');
			$table->string('ruta_norma');
			$table->string('nombre_usuario');
			$table->date('fecha_hora');
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
		Schema::drop('normas');
	}

}
