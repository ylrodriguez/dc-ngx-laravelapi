<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dc-images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('id')->on('dc-products')->onDelete('cascade');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `dc-images` AUTO_INCREMENT = 1001;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dc-images');
    }
}
