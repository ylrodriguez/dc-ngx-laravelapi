<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryidFkProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dc-products', function (Blueprint $table) {
            $table->unsignedInteger('category_id')->after('offerDiscount');
            $table->foreign('category_id')->references('id')->on('dc-categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dc-products', function (Blueprint $table) {
            $table->dropForeign('category_id');
        });
    }
}
