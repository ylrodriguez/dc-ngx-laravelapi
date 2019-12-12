<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dc-products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('brand');
            $table->string('description' , 1000);
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('offerDiscount');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `dc-products` AUTO_INCREMENT = 1010;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dc-products');
    }
}
