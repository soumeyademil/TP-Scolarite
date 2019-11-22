<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReclamationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reclamations', function(Blueprint $table)
		{
			$table->string('MatrEtud', 10);
			$table->integer('GR');
			$table->string('CodeMod', 10);
			$table->string('reclamation');
			$table->integer('id', true);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reclamations');
	}

}
