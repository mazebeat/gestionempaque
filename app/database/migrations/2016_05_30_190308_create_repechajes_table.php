<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRepechajesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('repechajes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_repechaje');
			$table->date('fecha');
			$table->integer('id_local');
			$table->string('id_usuario');
			$table->string('dia_semana');
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
		Schema::drop('repechajes');
	}

}
