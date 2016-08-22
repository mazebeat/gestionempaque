<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccesosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accesos', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('id_acceso');
			$table->string('nom_acceso');
			$table->string('nom_acceso');
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
		Schema::drop('accesos');
	}

}
