<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkibootTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('skiboot', function (Blueprint $table) {
			// Define database table for skiboots
			$table->increments('id');
			$table->integer('name_id')->unsigned();
			$table->string('name')->unique();
			$table->string('brand');
			$table->string('category');
			$table->text('description');
			$table->integer('size')->length(2)->nullable(); // shoesize in French measurement
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
			// Dropping the complete table if exists
			Schema::dropIfExists('skiboot');
	}
}
