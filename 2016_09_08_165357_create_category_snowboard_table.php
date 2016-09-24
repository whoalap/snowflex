<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorySnowboardTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category_snowboard', function (Blueprint $table) {
			// creating the tables 
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
		Schema::table('category_snowboard', function (Blueprint $table) {
			// dropping the table
			Schema::dropIfExists('category_snowboard');
		});
	}
}
