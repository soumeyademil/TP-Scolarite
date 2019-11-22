<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEtudiantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('etudiant', function(Blueprint $table)
		{
			$table->string('MatrEtud', 10);
			$table->string('Nom', 20)->nullable();
			$table->string('Prenom', 20)->nullable();
			$table->string('Promo', 4);
			$table->string('Section', 2);
			$table->integer('Gr');
			$table->string('etat', 10);
			$table->string('AScol', 9);
			$table->primary(['MatrEtud','AScol']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('etudiant');
	}

}
