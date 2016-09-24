<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorySkibootTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category_skiboot', function (Blueprint $table) {			
			//
			$table->increments('id');
			$table->string('category')->unique();
			$table->decimal('dayprice',4,2);
				
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
		Schema::table('category_skiboot', function (Blueprint $table) {
			//
			Schema::dropIfExists('category_skiboot');
		});
	}
}
