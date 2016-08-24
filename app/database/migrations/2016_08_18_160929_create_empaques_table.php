<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpaquesTable extends Migration
{
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empaques', function (Blueprint $table) {
			$table->increments('id');
			$table->string('id_usuario')->unique();
			$table->string('nombre');
			$table->string('ape_paterno');
			$table->string('ape_materno');
			$table->integer('id_region');
			$table->integer('id_provincia');
			$table->integer('id_comuna');
			$table->string('direccion');
			$table->long('telefono');
			$table->string('email');
			$table->string('sexo', 1)->default('John');
			$table->date('fecha_nacimiento');
			$table->integer('id_casa_estudio');
			$table->integer('id_perfil');
			$table->integer('id_local');
			$table->boolean('bloqueado');
			$table->string('nombre_usuario');
			$table->date;
			('fecha_hora');
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
		Schema::drop('empaques');
	}
	
}
