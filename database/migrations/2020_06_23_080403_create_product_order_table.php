<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_order', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('product_id');
          $table->foreign('product_id')->references('id')->on('products');
          $table->unsignedBigInteger('order_id');
          $table->foreign('order_id')->references('id')->on('orders');
          $table->integer('quantity');
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
        Schema::dropIfExists('product_order');
    }
}
