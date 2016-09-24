<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorySnowboardbootTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_snowboardboot', function (Blueprint $table) {
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
        Schema::table('category_snowboardboot', function (Blueprint $table) {
            //
        	Schema::dropIfExists('category_snowboardboot');
        });
    }
}
