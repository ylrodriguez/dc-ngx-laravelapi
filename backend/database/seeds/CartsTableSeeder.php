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
                'user_id' => 9011,
                'product_id' => 1011,
                'quantity' => 2            
            ],
            [
                'user_id' => 9011,
                'product_id' => 1021,
                'quantity' => 2            
            ],
            [
                'user_id' => 9011,
                'product_id' => 1031,
                'quantity' => 2            
            ],
            [
                'user_id' => 9011,
                'product_id' => 1041,
                'quantity' => 1            
            ],
            [
                'user_id' => 9021,
                'product_id' => 1021,
                'quantity' => 2  
            ],
            [
                'user_id' => 9021,
                'product_id' => 1101,
                'quantity' => 2  
            ],
            [
                'user_id' => 9031,
                'product_id' => 1061,
                'quantity' => 1
            ],
            [
                'user_id' => 9041,
                'product_id' => 1051,
                'quantity' => 2  
            ]
        ];

        foreach($carts as $cart){
            CartItem::create($cart);
        }
    }
}
