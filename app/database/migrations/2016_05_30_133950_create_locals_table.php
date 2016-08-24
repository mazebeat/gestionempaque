<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalsTable extends Migration
{
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locals', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('id_local');
			$table->string('nom_local');
			$table->string('gerente_local');
			$table->integer('id_region');
			$table->integer('id_provincia');
			$table->integer('id_comuna');
			$table->string('direccion');
			$table->string('telefono');
			$table->email('email');
			$table->integer('id_turno');
			$table->string('dia_semana_toma_turno');
			$table->string('hora_toma_turno_inicio');
			$table->string('hora_toma_turno_final');
			$table->string('hora_repechaje_inicio');
			$table->string('hora_repechaje_final');
			$table->string('planilla');
			$table->string('local_activo');
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
		Schema::drop('locals');
	}
	
}
