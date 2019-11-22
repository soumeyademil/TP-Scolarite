<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModuleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('module', function(Blueprint $table)
		{
			$table->string('AS', 9);
			$table->string('CodeMod', 10);
			$table->string('Promo', 4);
			$table->string('Sem', 2);
			$table->integer('Coef');
			$table->boolean('Opt');
			$table->string('formule')->nullable();
			$table->primary(['AS','CodeMod']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('module');
	}

}
