<?php

use Illuminate\Database\Seeder;
use App\CartItem;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carts = [
            [
                'user_id' => 9001,
                'product_id' => 1001,
                'quantity' => 2            
            ],
            [
                'user_id' => 9001,
                'product_id' => 1002,
                'quantity' => 2            
            ],
            [
                'user_id' => 9001,
                'product_id' => 1003,
                'quantity' => 2            
            ],
            [
                'user_id' => 9002,
                'product_id' => 1002,
                'quantity' => 2  
            ],
            [
                'user_id' => 9003,
                'product_id' => 1006,
                'quantity' => 1
            ],
            [
                'user_id' => 9004,
                'product_id' => 1005,
                'quantity' => 2  
            ]
        ];

        foreach($carts as $cart){
            CartItem::create($cart);
        }
    }
}
