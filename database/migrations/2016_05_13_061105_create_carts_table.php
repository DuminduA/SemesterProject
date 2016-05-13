<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    //price should be a float value
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id')->unique()->index();
            $table->integer('customer_id')->unsigned();
            $table->string('name');
            $table->integer('price')->unsigned();
            $table->integer('qunatity')->unsigned();
            $table->timestamps();



        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('carts');
    }
}
