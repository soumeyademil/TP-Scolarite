<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModgrensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modgrens', function(Blueprint $table)
		{
			$table->integer('MatrEns')->index('ModGrEns_fk0');
			$table->string('CodeMod', 10);
			$table->integer('Gr');
			$table->primary(['CodeMod','Gr']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('modgrens');
	}

}
