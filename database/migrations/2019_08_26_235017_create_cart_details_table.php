<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carddetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->integer('discount');
            //FK
            $table->unsignedInteger('cart_id');
            $table->foreign('cart_id')->references('id')->on('carts');

            //FK
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');


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
        Schema::dropIfExists('cart_details');
    }
}
