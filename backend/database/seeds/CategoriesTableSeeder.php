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
                'slug' => 'smartphones',
                "icon" => "fas fa-mobile-alt",
            ],
            [
                "name" => "Computers & Accessories",
                'slug' => 'computers',
                "icon" => "fas fa-laptop",
            ],
            [
                "name" => "TV, Video & Home Audio",
                'slug' => 'electronics',
                "icon" => "fas fa-tv",
            ],
            [
                "name" => "Cameras",
                'slug' => 'cameras',
                "icon" => "fas fa-camera",
            ],
            [
                "name" => "Video games",
                'slug' => 'videogames',
                "icon" => "fas fa-gamepad",
            ],
            [
                "name" => "Headphones",
                'slug' => 'headphones',
                "icon" => "fas fa-headphones-alt",
            ],
        ];

        foreach ($categories as $category){
            Category::create($category);
        }
    }
}
