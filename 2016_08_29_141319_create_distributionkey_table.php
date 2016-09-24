<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistributionkeyTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('distributionkey', function (Blueprint $table) {
			//
			$table->increments('id');
			$table->smallInteger('snowflex')->length(2)->nullable();
			$table->smallInteger('shopowner')->length(2)->nullable();
			$table->smallInteger('supplier')->length(2)->nullable();

			$table->engine = 'InnoDB';
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('distributionkey', function (Blueprint $table) {
			// Dropping the complete table if exists
			Schema::dropIfExists('distributionkey');
			
		});
	}
}
