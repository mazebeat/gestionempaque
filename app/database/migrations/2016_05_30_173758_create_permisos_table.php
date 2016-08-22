<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermisosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permisos', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('id_perfil');
			$table->integer('id_acceso');
			$table->boolean('insertar');
			$table->boolean('modificar');
			$table->boolean('eliminar');
			$table->boolean('consultar');
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
		Schema::drop('permisos');
	}

}
