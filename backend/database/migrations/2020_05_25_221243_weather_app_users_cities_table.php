<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WeatherAppUsersCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weatherapp-users-cities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('weatherapp-cities');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('dc-users');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `weatherapp-users-cities` AUTO_INCREMENT = 3010;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weatherapp-users-cities');
    }
}
