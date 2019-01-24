<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsistenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asistencias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('tipo', 50);
			$table->timestamps();
			$table->integer('medico_id')->unsigned();
			$table->dateTime('fecha')->nullable();
			$table->string('ubicacion')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('asistencias');
	}

}
