<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                "name" => "Smartphones",
                "icon" => "fas fa-mobile-alt",
            ],
            [
                "name" => "Computers & Accessories",
                "icon" => "fas fa-laptop",
            ],
            [
                "name" => "TV, Video & Home Audio",
                "icon" => "fas fa-tv",
            ],
            [
                "name" => "Cameras",
                "icon" => "fas fa-camera",
            ],
            [
                "name" => "Video games",
                "icon" => "fas fa-gamepad",
            ],
            [
                "name" => "Headphones",
                "icon" => "fas fa-headphones-alt",
            ],
        ];

        foreach ($categories as $category){
            Category::create($category);
        }
    }
}
