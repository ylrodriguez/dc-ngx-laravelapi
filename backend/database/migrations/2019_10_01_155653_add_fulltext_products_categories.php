<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFulltextProductsCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE FULLTEXT INDEX `product_fulltext`
        ON `dc-products`(`name`,`brand`)");
        DB::statement("CREATE FULLTEXT INDEX `category_fulltext`
        ON `dc-categories`(`name`,`slug`)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
