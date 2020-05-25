<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WeatherAppCreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weatherapp-cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('country',50);
            $table->string('countryCode',2);
            $table->string('slug' , 53)->unique();
            $table->string('imgUrl',250);
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `weatherapp-cities` AUTO_INCREMENT = 1010;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weatherapp-cities');
    }
}
