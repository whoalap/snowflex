<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSnowboardTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('snowboard', function (Blueprint $table) {
			//
			$table->increments('id');
			$table->integer('name_id')->unsigned();
			$table->string('name')->unique();
			$table->string('brand');
			$table->string('category');
			$table->string('supplier');
			$table->text('description');
			$table->integer('length')->lenght(3)->nullable(); // length in centimeters
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
		Schema::table('snowboard', function (Blueprint $table) {
			// Dropping the complete table if exists
			Schema::dropIfExists('snowboard');
		});
	}
}

