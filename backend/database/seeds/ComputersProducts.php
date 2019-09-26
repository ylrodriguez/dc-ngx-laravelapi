<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Product;
use App\Image;

class ComputersProducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [

            [ // >>>>>>>>>>>>>> Start computers
                'name' => 'Portatil Asus Vivobook X411ua Intel Core I5 4gb 1tb 14',
                'brand' => 'Asus',
                'slug' => Str::slug('Portatil Asus Vivobook X411ua Intel Core', '-'),
                'description' => 'Accesorios N/A Alto 2.04 (H) cm Ancho 32.6(W) Batería 42WHrs, 3S1P, 3-cell Li-ion Bluetooth Si Cantidad de núcleos Quad Core Capacidad de disco duro 1TB Color GRIS Conectividad Inalámbrica 802.11ac+Bluetooth 4.1 (Dual band) 1*1 Familia de procesador Intel Core i5 Fuente de alimentacion 45W AC Adapter',
                'price' => 2000000,
                'quantity' => 40,
                'offerDiscount' => 15,
                'category_id' => 1002,
            ],
            [
                'name' => 'Portatil Asus Vivobook X411 Intel Core I3 4gb+16gb Opt 1tb',
                'brand' => 'Asus',
                'slug' => Str::slug('Portatil Asus Vivobook X411 Intel Core I3 4gb', '-'),
                'description' => 'Alto 2.04 (H) cm Ancho 32.6(W) Batería 42WHrs, 3S1P, 3-cell Li-ion Bluetooth Si Cantidad de núcleos Dual Core Capacidad de disco duro 1TB Color GOLD Conectividad Inalámbrica 802.11ac+Bluetooth 4.2 (Dual band) 2*2 Familia de procesador Intel Core i3 Fuente de alimentacion 45W AC Adapter',
                'price' => 1900000,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1002,
            ],
            [
                'name' => 'Portatil Asus X505ba Amd A9 9425 4gb 1tera Endless 15.6',
                'brand' => 'Asus',
                'slug' => Str::slug('Portatil Asus X505ba Amd A9 9425 4gb 1tera Endless 15.6', '-'),
                'description' => 'Tamaño de Pantalla 15.6 pulgadas Modelo X505ba Br293 Tipo de Procesador AMD A9 9425 Conexión WLAN 802.11AC(2*2)_WW + BLUETOOTH Unidad Óptica NO',
                'price' => 1500000,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1002,
            ],
            [
                'name' => 'Portátil Hp 14-Ck0010la Core I3-7020u 4gb 1tb 14 Pulgadas',
                'brand' => 'HP',
                'slug' => Str::slug('Portátil Hp 14-Ck0010la Core I3-7020u 4gb 1tb 14 Pulgadas', '-'),
                'description' => 'Batería Batería prismática de litio-ion de 3 celdas de 41 Wh Bluetooth Si Cantidad de núcleos Dual Core Capacidad de disco duro 1TB Conectividad Inalámbrica 802.11b/g/n (1x1)(19) Wi-Fi y Bluetooth®(26) 4.2 combinado Familia de procesador Intel Core i3 Fuente de alimentacion Adaptador de CA de 45 W Generación del procesador Séptima Gráficas Gráficas Intel HD 620',
                'price' => 1700000,
                'quantity' => 40,
                'offerDiscount' => 0,
                'category_id' => 1002,
            ],
            [
                'name' => 'Asus TUF FX504GE-EN756T Core i5 8300H-GTX1050Ti-15,6',
                'brand' => 'Asus',
                'slug' => Str::slug('Asus TUF FX504GE-EN756T Core i5 8300H-GTX1050Ti-15,6', '-'),
                'description' => 'Capacidad de almacenamiento HDD 1 TB Procesador Intel Core i5 Tipo de pantalla LCD Accesorios Teclado Iluminado LA Tarjeta de Video Nvidia GeForce GTX 1050Ti ( 4 GB DDR5) Batería 3 Celdas 48 Wh',
                'price' => 3000000,
                'quantity' => 40,
                'offerDiscount' => 10,
                'category_id' => 1002,
            ],
            [
                'name' => 'Portatil HP 14-BS015LA Core i5 8GB 1TB 14 pulgadas',
                'brand' => 'HP',
                'slug' => Str::slug('Portatil HP 14-BS015LA Core i5 8GB 1TB 14 pulgadas', '-'),
                'description' => 'Batería Batería prismática de litio-ion de 3 celdas de 41 Wh Bluetooth Si Cantidad de núcleos Dual Core Capacidad de disco duro 1TB Conectividad Inalámbrica 802.11b/g/n (1x1)(19) Wi-Fi y Bluetooth®(26) 4.2 combinado Familia de procesador Intel Core i3 Fuente de alimentacion Adaptador de CA de 45 W Generación del procesador Séptima Gráficas Gráficas Intel HD 620',
                'price' => 1600000,
                'quantity' => 40,
                'offerDiscount' => 0,
                'category_id' => 1002,
            ],
            [
                'name' => 'Portátil Asus E406sa Atom 4core Ram 4gb Disco 64gb 14 pulg',
                'brand' => 'Asus',
                'slug' => Str::slug('Portátil Asus E406sa Atom 4core Ram 4gb Disco 64gb 14 pulg', '-'),
                'description' => 'El E406 está diseñado para ayudarte a ser productivo durante todo el día, aunque te encuentres fuera. Compacto y ligero, este portátil está equipado con los nuevos procesadores de Intel®, una pantalla NanoEdge inmersiva y hasta 14 horas de autonomía*, características que lo hacen perfecto para usuarios con un alto grado de movilidad.',
                'price' => 1000000,
                'quantity' => 40,
                'offerDiscount' => 10,
                'category_id' => 1002,
            ],
            [
                'name' => 'Portatil HP 245 G6 Amd E2-9001 14 pulgadas',
                'brand' => 'HP',
                'slug' => Str::slug('Portatil HP 245 G6 Amd E2-9001 14 pulgadas', '-'),
                'description' => 'Procesador : APU AMD E2-9000e de 7ª generación Memoria : 4 GB de SDRAM DDR4-1866 Disco duro : 500 Gb Pantalla : planta antirreflejo LED de 14Pulg. resolución 1366 x 768 Unidad CD : No incluye Puertos : 2 USB 3.0; 1 USB 2.0; 1 HDMI; 1 VGA; 1 RJ-45; 1 combinación de auriculares/micrófono; lector de tarjetas.',
                'price' => 1100000,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1002,
            ],
            [
                'name' => 'Portatil Hp 14 Bs006La Celeron Linux 4Gb 14 Pulgadas',
                'brand' => 'HP',
                'slug' => Str::slug('Portatil Hp 14 Bs006La Celeron Linux 4Gb 14 Pulgadas', '-'),
                'description' => 'Con el último procesador INTEL CELERON queda garantizado el rendimiento confiable necesario para trabajar y jugar. Disfrute de gran durabilidad con una laptop diseñada para hacer lo que desea con facilidad.
            ',
                'price' => 900000,
                'quantity' => 40,
                'offerDiscount' => 0,
                'category_id' => 1002,
            ],
            [
                'name' => 'MacBook Air MRE82E-A Core i5 8GB 128 SSD 13 Pulgadas',
                'brand' => 'Apple',
                'slug' => Str::slug('MacBook Air MRE82E-A Core i5 8GB 128 SSD 13 Pulgadas', '-'),
                'description' => 'La notebook Mac más querida de todas está de vuelta para que te vuelvas a enamorar. La nueva MacBook Air es más delgada y ligera, está disponible en gris espacial, color plata y color oro, y viene con una brillante pantalla Retina, Touch ID, teclado de última generación y trackpad Force Touch. Como su icónica estructura está hecha de aluminio 100% reciclado, es la Mac más ecológica hasta ahora. Y con una batería que dura todo el día, la MacBook Air es perfecta para llevar a todos lados y hacer de todo.',
                'price' => 5000000,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1002,
            ], //End computers 10
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        $images = [
            [ //Start Computers
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/689476',
                'product_id' => 1016,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/689477',
                'product_id' => 1016,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/689478',
                'product_id' => 1016,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/688595',
                'product_id' => 1017,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/688596',
                'product_id' => 1017,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/688597',
                'product_id' => 1017,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/257995',
                'product_id' => 1018,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/257996',
                'product_id' => 1018,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/257997',
                'product_id' => 1018,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/300544',
                'product_id' => 1019,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/300545',
                'product_id' => 1019,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/300546',
                'product_id' => 1019,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/603643',
                'product_id' => 1020,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/603645',
                'product_id' => 1020,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/603646',
                'product_id' => 1020,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/260602',
                'product_id' => 1021,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/260603',
                'product_id' => 1021,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/729912',
                'product_id' => 1022,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/729913',
                'product_id' => 1022,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/729914',
                'product_id' => 1022,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/321936',
                'product_id' => 1023,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/321935',
                'product_id' => 1023,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/256791',
                'product_id' => 1024,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/256792',
                'product_id' => 1024,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/256793',
                'product_id' => 1024,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/383234',
                'product_id' => 1025,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/383235',
                'product_id' => 1025,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/383236',
                'product_id' => 1025,
            ], //End Computers
        ];

        foreach ($images as $image) {
            Image::create($image);
        }
    }
}

// 
// [
//     'name' => '',
//     'brand' => '',
//     'slug' => Str::slug('','-'),
//     'description' => '',
//     'price' => 0,
//     'quantity' => 40,
//     'offerDiscount' => 20 ,
//     'category_id' => 1002
// ],


// [ 
//     'url' => '',
//     'product_id' => 1020
// ],
