<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSnowboardbootTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snowboardboot', function (Blueprint $table) {
        	// Define database table for snowboardboots
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
        Schema::table('snowboardboot', function (Blueprint $table) {
            //
        	Schema::dropIfExists('snowboardboot');
        });
    }
}
