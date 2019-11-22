<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToModgrensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('modgrens', function(Blueprint $table)
		{
			$table->foreign('MatrEns', 'ModGrEns_fk0')->references('MatrEns')->on('enseignant')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('modgrens', function(Blueprint $table)
		{
			$table->dropForeign('ModGrEns_fk0');
		});
	}

}
