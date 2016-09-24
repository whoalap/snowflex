<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkiTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ski', function (Blueprint $table) {
			// create table called 'ski' after model in database
			$table->increments('id');
			$table->integer('name_id')->unsigned();
			$table->string('name')->unique();
			$table->string('brand');
			$table->string('category');
			$table->text('description');
			$table->integer('length')->nullable(); // length in centimeters
			$table->binary('image');
			$table->boolean('available')->default(0);
			$table->timestamps();
			
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
		Schema::table('ski', function (Blueprint $table) {
			// dropping the schema
			Schema::drop('ski');
		});
	}
}
