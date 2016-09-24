<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNawTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('naw', function (Blueprint $table) {
			// Define the table which contains NAW information
			$table->increments('id');
			$table->string('name');
			$table->string('surname');
			$table->string('prefix')->length(10)->nullable(); // in Dutch "voorvoegsel"
			$table->string('postcode')->length(6); // in Belgium only 4 digits
			$table->string('location')->lenght(200); // Town, village, place of living
			$table->string('country'); // must always be the Netherlands but in later stadium it should be expanded
			$table->string('telephonenumber')->length(10)->nullable();
			$table->string('mobilenumber')->length(10);
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
			// dropping table if exists
			Schema::dropIfExists('naw');			
	}
}
