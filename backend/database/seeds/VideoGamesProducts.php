<?php

use App\Image;
use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VideoGamesProducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [ // >>>>>>>>>>>>>> Start Video Games
            [
                'name' => '',
                'brand' => '',
                'slug' => Str::slug('', '-'),
                'description' => '',
                'price' => 0,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1005,
            ],
            [
                'name' => '',
                'brand' => '',
                'slug' => Str::slug('', '-'),
                'description' => '',
                'price' => 0,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1005,
            ],
            [
                'name' => '',
                'brand' => '',
                'slug' => Str::slug('', '-'),
                'description' => '',
                'price' => 0,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1005,
            ],
            [
                'name' => '',
                'brand' => '',
                'slug' => Str::slug('', '-'),
                'description' => '',
                'price' => 0,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1005,
            ],
            [
                'name' => '',
                'brand' => '',
                'slug' => Str::slug('', '-'),
                'description' => '',
                'price' => 0,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1005,
            ],
            [
                'name' => '',
                'brand' => '',
                'slug' => Str::slug('', '-'),
                'description' => '',
                'price' => 0,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1005,
            ],
            [
                'name' => '',
                'brand' => '',
                'slug' => Str::slug('', '-'),
                'description' => '',
                'price' => 0,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1005,
            ],
            [
                'name' => '',
                'brand' => '',
                'slug' => Str::slug('', '-'),
                'description' => '',
                'price' => 0,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1005,
            ],
            [
                'name' => '',
                'brand' => '',
                'slug' => Str::slug('', '-'),
                'description' => '',
                'price' => 0,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1005,
            ],
            [
                'name' => '',
                'brand' => '',
                'slug' => Str::slug('', '-'),
                'description' => '',
                'price' => 0,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1005,
            ],
            //End Video Games 10
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        $images = [ //Start Video Games

            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],
            [
                'url' => '',
                'product_id' => 1020,
            ],

            //End Video Games
        ];

        foreach ($images as $image) {
            Image::create($image);
        }
    }
}
