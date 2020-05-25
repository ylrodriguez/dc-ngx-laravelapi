<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\WeatherAppModels\City;

class WeatherAppCities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                "name" => "Bogotá",
                "country" => "Colombia",
                "countryCode" => "CO",
                "slug" => Str::slug('Bogotá CO','-'),
                "imgUrl" => "https://images.unsplash.com/photo-1568632234157-ce7aecd03d0d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=81001"
            ],
            [
                "name" => "Medellín",
                "countryCode" => "CO",
                "country" => "Colombia",
                "slug" => Str::slug('Medellín CO','-'),
                "imgUrl" => "https://images.unsplash.com/photo-1515366974328-f1181eb25189?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjEzNjQ2OH1001"
            ],
            [
                "name" => "São Paulo",
                "countryCode" => "BR",
                "country" => "Brazil",
                "slug" => Str::slug('São Paulo BR','-'),
                "imgUrl" => "https://images.unsplash.com/photo-1543059080-f9b1272213d5?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjEzNjQ2OH0"
            ],
            [
                "name" => "Barranquilla",
                "countryCode" => "CO",
                "country" => "Colombia",
                "slug" => Str::slug('Barranquilla CO','-'),
                "imgUrl" => "https://images.unsplash.com/photo-1587332064870-7ccfa02a94ad?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjEzNjQ2OH1001"
            ],
            [
                "name" => "Buenos Aires",
                "countryCode" => "AR",
                "country" => "Argentina",
                "slug" => Str::slug('Buenos Aires AR','-'),
                "imgUrl" => "https://images.unsplash.com/photo-1534126874-5f6762c6181b?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjEzNjQ2OH0"
            ],
            [
                "name" => "Cartagena",
                "countryCode" => "CO",
                "country" => "Colombia",
                "slug" => Str::slug('Cartagena CO','-'),
                "imgUrl" => "https://images.unsplash.com/photo-1534943441045-1009d7cb0bb9?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjEzNjQ2OH0"
            ],
            [
                "name" => "Santa marta",
                "countryCode" => "CO",
                "country" => "Colombia",
                "slug" => Str::slug('Santa marta CO','-'),
                "imgUrl" => "https://images.unsplash.com/photo-1549025227-2fd0b499aaae?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjEzNjQ2OH0"
            ],
            [
                "name" => "Santiago",
                "countryCode" => "CL",
                "country" => "Chile",
                "slug" => Str::slug('Santiago CL','-'),
                "imgUrl" => "https://images.unsplash.com/photo-1515166332015-1d64b8d45691?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjEzNjQ2OH0"
            ]
        ];

        foreach($cities as $city){
            City::create($city);
        }
    }
}
