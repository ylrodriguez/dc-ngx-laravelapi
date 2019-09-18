<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsUsersProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dc-cart-items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('dc-products');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('dc-users');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `dc-cart-items` AUTO_INCREMENT = 3001;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dc-cart-items');
    }
}
