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
                "icon" => "smartphone-1",
            ],
            [
                "name" => "Computers & Accessories",
                'slug' => 'computers',
                "icon" => "macbook",
            ],
            [
                "name" => "TV & Home Audio",
                'slug' => 'electronics',
                "icon" => "television-1",
            ],
            [
                "name" => "Cameras",
                'slug' => 'cameras',
                "icon" => "photo-camera",
            ],
            [
                "name" => "Video games",
                'slug' => 'videogames',
                "icon" => "game-controller-1",
            ],
            [
                "name" => "Headphones",
                'slug' => 'headphones',
                "icon" => "headphones",
            ],
        ];

        foreach ($categories as $category){
            Category::create($category);
        }
    }
}
