<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
  
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->float('orderPrice')->unsigned();
            $table->boolean('status');//proceeded or not
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
        Schema::drop('orders');
    }
}
