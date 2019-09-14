<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Iphone 6 - 32 GB Gold',
                'brand' => 'Apple',
                'description' => 'Capacidad de almacenamiento: 32 Gb. Sistema Operativo: iOS. Tamaño de Pantalla: 4.7 Pulgadas. Tamaño SIM: Nano. Dual Sim: No. Conectividad Inalámbrica: Wifi. Altavoz: Si. Referencia: MQ3Y2CL/A.',
                'price' => 999.883,
                'offerDiscount' => 0
            ],
            [
                'name' => 'Samsung Galaxy A7 2018 64GB Negro',
                'brand' => 'Samsung',
                'description' => 'Tamaño de Pantalla: 6.0. Cámara principal: 24+8+5MP. Sistema Operativo: Android. Memoria Interna: 64 GB. Modelo: A7201864gb. RAM: 4 GB. Cámara frontal: 24MP. Rango de la cámara principal: Más de 15 MP. Rango del tamaño de la pantalla: Más de 5.5 pulgadas.',
                'price' => 714.900,
                'offerDiscount' => 10
            ],
        ];

        foreach($products as $product){
            Product::create($product);
        }
    }
}
