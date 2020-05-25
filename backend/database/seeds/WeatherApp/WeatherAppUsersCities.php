<?php

use Illuminate\Database\Seeder;
use App\WeatherAppModels\City;

class WeatherAppUsersCities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weatherapp-users-cities')->insert(array(

            array('city_id' => 1011, 'user_id' => 9011, "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now()),
            array('city_id' => 1021, 'user_id' => 9011, "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now()),
            array('city_id' => 1031, 'user_id' => 9011, "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now()),
            array('city_id' => 1041, 'user_id' => 9011, "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now()),
            array('city_id' => 1051, 'user_id' => 9011, "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now()),
            array('city_id' => 1061, 'user_id' => 9011, "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now()),
            array('city_id' => 1071, 'user_id' => 9011, "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now()),
            array('city_id' => 1081, 'user_id' => 9011, "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now()),

            array('city_id' => 1021, 'user_id' => 9021, "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now()),
            array('city_id' => 1081, 'user_id' => 9021, "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now()),

            array('city_id' => 1031, 'user_id' => 9031, "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now()),
            array('city_id' => 1071, 'user_id' => 9031, "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now()),

            array('city_id' => 1041, 'user_id' => 9041, "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now()),
            array('city_id' => 1011, 'user_id' => 9041, "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now())
            
        ));
    }
}
