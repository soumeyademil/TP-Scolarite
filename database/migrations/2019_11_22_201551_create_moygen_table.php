<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoygenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('moygen', function(Blueprint $table)
		{
			$table->string('AS', 9);
			$table->string('MatrEtud', 10);
			$table->string('Promo', 4);
			$table->float('MoySem1', 10, 0)->nullable();
			$table->float('MoySem2', 10, 0)->nullable();
			$table->float('MoyAnnu', 10, 0)->nullable();
			$table->integer('Rang')->nullable();
			$table->primary(['AS','MatrEtud']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('moygen');
	}

}
