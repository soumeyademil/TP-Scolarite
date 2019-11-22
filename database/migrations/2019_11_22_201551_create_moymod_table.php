<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoymodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('moymod', function(Blueprint $table)
		{
			$table->string('AScol', 9);
			$table->string('MatrEtud', 10);
			$table->string('CodeMod', 10);
			$table->float('NCC', 10, 0)->nullable();
			$table->float('NCI', 10, 0)->nullable();
			$table->float('NCF', 10, 0);
			$table->float('NTP', 10, 0)->nullable();
			$table->float('Moy', 10, 0);
			$table->primary(['AScol','MatrEtud','CodeMod']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('moymod');
	}

}
