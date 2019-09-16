<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
                'slug' => Str::slug('Iphone 7 - 64 GB Gold','-'),
                'description' => 'Capacidad de almacenamiento: 32 Gb. Sistema Operativo: iOS. Tamaño de Pantalla: 4.7 Pulgadas. Tamaño SIM: Nano. Dual Sim: No. Conectividad Inalámbrica: Wifi. Altavoz: Si. Referencia: MQ3Y2CL/A.',
                'price' => 999000,
                'quantity' => 10,
                'offerDiscount' => 0,
                'category_id' => 1001
            ],
            [
                'name' => 'Samsung Galaxy A7 2018 64GB Negro',
                'brand' => 'Samsung',
                'slug' => Str::slug('Samsung Galaxy A7 2018 64GB Negro','-'),
                'description' => 'Tamaño de Pantalla: 6.0. Cámara principal: 24+8+5MP. Sistema Operativo: Android. Memoria Interna: 64 GB. Modelo: A7201864gb. RAM: 4 GB. Cámara frontal: 24MP. Rango de la cámara principal: Más de 15 MP. Rango del tamaño de la pantalla: Más de 5.5 pulgadas.',
                'price' => 714900,
                'quantity' => 18,
                'offerDiscount' => 10,
                'category_id' => 1001
            ],
            [
                'name' => 'Moto G6 Azul Indigo',
                'brand' => 'Motorola',
                'slug' => Str::slug('Moto G6 Azul Indigo','-'),
                'description' => 'Altavoz: Si. Bluetooth: Si. Capacidad: 32 GB. Chipset: Qualcomm Snapdragon 450 OctaCore a 1.8 Ghz. Color: Indigo. CPU: OctaCore a 2.0 Ghz. Dimensiones: Height (y) 153.8 mm-Width (x) 72.3 mm-Depth (z) 8.3mm.',
                'price' => 729000,
                'quantity' => 15 ,
                'offerDiscount' => 50,
                'category_id' => 1001
            ],
            [
                'name' => 'Moto G6 Plus Azul Nimbus',
                'brand' => 'Motorola',
                'slug' => Str::slug('Moto G6 Plus Azul Nimbus','-'),
                'description' => 'Accesorios Incluidos: Cable USB, Turbocargador, Case tapa. Alto: 15.99 cm. Ancho: 7.55 cm. Batería: 3200 mAh. Cámara: Si. Cámara Frontal: Si. Capacidad: 64 GB. Conectividad: Wi fi/Bluetooth/NFC. Dual Sim o Single Sim: Dual Sim.',
                'price' => 1199900,
                'quantity' => 25,
                'offerDiscount' => 50 ,
                'category_id' => 1001
            ],
            [
                'name' => 'Zf M1 Asus Dorado',
                'brand' => 'Asus',
                'slug' => Str::slug('Zf M1 Asus Dorado','-'),
                'description' => 'Accesorios Incluidos: Cargador, Auriculares ,Cable UBS. Alto: 147.3 mm. Ancho: 70.9 mm. Batería: POLYMER 4000mAh. Cámara: Si. Cámara Frontal: Si. Capacidad: 32 GB. Conectividad: Wi fi/Bluetooth. Dual Sim o Single Sim: Dual Sim.',
                'price' => 800000 ,
                'quantity' => 12 ,
                'offerDiscount' => 60,
                'category_id' => 1001
            ],
            [
                'name' => 'Huawei Y9 Prime 2019 128GB Negro Midnight',
                'brand' => 'Huawei',
                'slug' => Str::slug('Huawei Y9 Prime 2019 128GB Negro Midnight','-'),
                'description' => 'Tipo de pantalla: LCD IPS LTPS touchscreen capacitivo, 16M colores. Cámara principal: Más de 15 MP. Memoria RAM: 4 GB. Tipo Bateria: Li-Po. USB: TipoC. Camara frontal: Más de 15 MP. GPS: Si. Dual sim: Sí. Bluetooth: Si. Radio: Fm.',
                'price' => 1100000,
                'quantity' => 30,
                'offerDiscount' => 30 ,
                'category_id' => 1001
            ],
            [
                'name' => 'Redmi Note 7 Dual 128GB Negro',
                'brand' => 'Redmi',
                'slug' => Str::slug('Redmi Note 7 Dual 128GB Negro','-'),
                'description' => 'Tamaño de Pantalla: 6,3. Conectividad: Si. Voltaje: 4000 mAh. Cámara principal: Dual Camara 48MP+5MP. Dual sim: Si. Sistema Operativo: Android. Cámara Frontal: 13MP. Memoria Interna: 128GB.',
                'price' => 1640000,
                'quantity' => 12,
                'offerDiscount' => 30 ,
                'category_id' => 1001
            ],
            [
                'name' => 'Samsung Galaxy A50 Triple Cámara 64GB 4GB Azul',
                'brand' => 'Samsung',
                'slug' => Str::slug('Samsung Galaxy A50 Triple Cámara 64GB 4GB Azul','-'),
                'description' => 'Tamaño de Pantalla: 6,4. Conectividad: GSM / HSPA / LTE. Voltaje: 4000 mAh. Cámara principal: Triple Cámara 25MP+8MP+5MP. Dual sim: Si. Sistema Operativo: Android. Memoria Interna: 64GB. Capacidad: 64 GB.',
                'price' => 829900,
                'quantity' => 45,
                'offerDiscount' => 10 ,
                'category_id' => 1001
            ],
            [
                'name' => 'Celular iPhone 7 Negro 256GB',
                'brand' => 'Apple',
                'slug' => Str::slug('Celular iPhone 7 Negro 256GB','-'),
                'description' => 'Tamaño de Pantalla: 4.7 pulgadas. Cámara principal: 12 MP. Dual sim: NO. Sistema Operativo: iOS. Memoria Interna: 256GB.',
                'price' => 2149000,
                'quantity' => 20,
                'offerDiscount' => 10,
                'category_id' => 1001
            ],
            [   //10
                'name' => 'Iphone 8 Plus 64 GB Silver',
                'brand' => 'Apple',
                'slug' => Str::slug('Iphone 8 Plus 64 GB Silver','-'),
                'description' => 'Largo: 7. Potencia: 191. Camara frontal: Frontal FaceTime HD de 7 MP. Alto: 1. Ancho: 16. Peso: 1. Modelo: IPHONEplus8S. Camara principal: 12 MP con gran angular.',
                'price' => 2898896,
                'quantity' => 12,
                'offerDiscount' => 0,
                'category_id' => 1001
            ],
            [
                'name' => 'Iphone Xs - 64 Gb Gris Space',
                'brand' => 'Apple',
                'slug' => Str::slug('Iphone Xs - 64 Gb Gris Space','-'),
                'description' => 'Capacidad de almacenamiento: 64 Gb. Sistema Operativo: iOS. Tamaño de Pantalla: 5 Pulgadas. Referencia: MT9E2LZ/A.',
                'price' => 4309000,
                'quantity' => 10,
                'offerDiscount' => 0 ,
                'category_id' => 1001
            ],
            [
                'name' => 'Celular iPhone XR 64GB Rojo',
                'brand' => 'Apple',
                'slug' => Str::slug('Celular iPhone XR 64GB Rojo','-'),
                'description' => 'Sistema Operativo: iOS. Memoria Interna: 64 GB. Capacidad: 64 GB. RAM: 3 GB. Rango de la cámara principal: 11 a 15 MP.',
                'price' => 3199900,
                'quantity' => 12,
                'offerDiscount' => 15 ,
                'category_id' => 1001
            ],
            [
                'name' => 'Nokia 5 Octa Core 16Gb Ram 2Gb Cooper',
                'brand' => 'Nokia',
                'slug' => Str::slug('Nokia 5 Octa Core 16Gb Ram 2Gb Cooper','-'),
                'description' => 'La última versión de Android Pura, segura y actualizada El Nokia 5 viene con Android Nougat, la gama completa de servicios de Google y sin extras innecesarios. ',
                'price' => 399000,
                'quantity' => 10,
                'offerDiscount' => 0 ,
                'category_id' => 1001
            ],
            [
                'name' => 'Nokia 5 Oct 16 GB Ram 2 GB Dual Sim 4G Azul',
                'brand' => 'Nokia',
                'slug' => Str::slug('Nokia 5 Oct 16 GB Ram 2 GB Dual Sim 4G Azul','-'),
                'description' => 'Calidad en cada detalle
                Hemos diseñado Nokia 5 con nuestro reconocido cuidado por el detalle. El cuerpo, suave al tacto y minimalista, está fabricado con gran precisión a partir de una sola pieza de aluminio para aumentar la resistencia del móvil',
                'price' => 500000,
                'quantity' => 14,
                'offerDiscount' => 20 ,
                'category_id' => 1001
            ],
            [//15
                'name' => 'Nokia 2 Android 7.1 8gb Dual Sim 4G NEGRO',
                'brand' => 'Nokia',
                'slug' => Str::slug('Nokia 2 Android 7.1 8gb Dual Sim 4G NEGRO','-'),
                'description' => 'La cámara principal de 8 MP cuenta con detección automática de escena y enfoque automático. Con la cámara frontal de 5 MP, tus selfies también están en buenas manos.',
                'price' => 300000,
                'quantity' => 40,
                'offerDiscount' => 30 ,
                'category_id' => 1001
            ]
        ];

        foreach($products as $product){
            Product::create($product);
        }
    }
}
