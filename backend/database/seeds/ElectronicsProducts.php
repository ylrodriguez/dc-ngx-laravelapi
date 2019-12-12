<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Product;
use App\Image;

class ElectronicsProducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [ // >>>>>>>>>>>>>> Start Electronics
            [
                'name' => 'Televisor LED Samsung 50 Pulgadas UHD 4K Smart TV Serie 7',
                'brand' => 'Samsung',
                'slug' => Str::slug('Televisor LED Samsung 50 Pulgadas UHD 4K Smart TV Serie 7', '-'),
                'description' => 'Audio Bluetooth Si Celular a TV - Duplicación DLNA Si Dimensiones - Sin soporte (WxHxD) 1124.8 x 650.2 x 59.1 mm Diseño Plano / Delgado Entrada de Red (LAN) Si HDR 10 Si Marca Samsung Micro Dimming Microatenuación UHD Modo de juego Sí (Modo automático de juego) Modo Película Si Motor de imágenes Procesador UHD',
                'price' => 2700000,
                'quantity' => 40,
                'offerDiscount' => 0,
                'category_id' => 1031,
            ],
            [
                'name' => 'Televisor LED Curvo Samsung 55 Pulgadas UHD 4K Smart TV',
                'brand' => 'Samsung',
                'slug' => Str::slug('Televisor LED Curvo Samsung 55 Pulgadas UHD 4K Smart TV', '-'),
                'description' => 'Auto Motion Plus Sí Diseño New Edge (Volume Bezel) Dolby Digital Plus Sí Entrada de Red (LAN) Sí HDR 10+ Sí (alto rango dinámico) Marca Samsung Micro Dimming UHD Dimming Modo de película Sí',
                'price' => 4000000,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1031,
            ],
            [
                'name' => 'Televisor LED Samsung 32 Pulgadas HD Smart TV Serie 4',
                'brand' => 'Samsung',
                'slug' => Str::slug('Televisor LED Samsung 32 Pulgadas HD Smart TV Serie 4', '-'),
                'description' => '',
                'price' => 1230000,
                'quantity' => 40,
                'offerDiscount' => 10,
                'category_id' => 1031,
            ],
            [
                'name' => 'Tv Led 102 (40) Fhd Smart',
                'brand' => 'Caixun',
                'slug' => Str::slug('Tv Led 102 (40) Fhd Smart', '-'),
                'description' => 'Almacenamiento externo 8GB Angulo de visión 176°X 176° Baterias AAA x 2 Brillos 250cd/m2 COAXIAL 1 Consumo (En espera) ?0.5 W Consumo (En operación) ?70W',
                'price' => 1200000,
                'quantity' => 40,
                'offerDiscount' => 30,
                'category_id' => 1031,
            ],
            [
                'name' => 'Televisor LG 50 pulgadas UM7300 UHD Smart',
                'brand' => 'LG',
                'slug' => Str::slug('Televisor LG 50 pulgadas UM7300 UHD Smart', '-'),
                'description' => 'La inteligencia se refleja en Lenguaje Natural Con LG ThinQ AI, muchas experiencias se hacen posibles solo con tu voz. Continúa el diálogo con el reconocimiento de voz conversacional y obtén recomendaciones personalizadas basadas en tu experiencia. * LG ThinQ AI se activa con el “Botón de micrófono”, es necesario tener Magic Remote (Consulte abajo especificaciones/Accesorios, NO está incluido)',
                'price' => 2100000,
                'quantity' => 40,
                'offerDiscount' => 35,
                'category_id' => 1031,
            ],
            [
                'name' => 'Subwoofer Parlantes Logitech Z313 2.1',
                'brand' => 'Logitech',
                'slug' => Str::slug('Subwoofer Parlantes Logitech Z313 2.1', '-'),
                'description' => 'Sonido pleno para una experiencia de audio variada. Este sistema de altavoces 2.1 ofrece una acústica equilibrada y proporciona graves mejorados con un compacto subwoofer. Conecta cualquier dispositivo a la entrada de 3,5 mm y accede fácilmente a los mandos de encendido y volumen en la sección de control con cable.',
                'price' => 140000,
                'quantity' => 40,
                'offerDiscount' => 0,
                'category_id' => 1031,
            ],
            [
                'name' => 'Teatro en Casa 2.1 Bluetooth USB SD J5135 JyR',
                'brand' => 'Jyr Technology',
                'slug' => Str::slug('Teatro en Casa 2.1 Bluetooth USB SD J5135 JyR', '-'),
                'description' => 'Sistema envolvente de 2.1 canales Sistema de audio para TV, DVD, BLURAY, PC Lector USB Control remoto SuperBass. Radio FM. Bluetooth. Potencia de salida total de 52 watts (RMS) Subwoofer 30W+22W satélites Selección del modo de espera Mando a distancia para ajustar el volumen y el bajo Toma de auriculares para escuchar en privado*bluetooth.',
                'price' => 250000,
                'quantity' => 40,
                'offerDiscount' => 15,
                'category_id' => 1031,
            ],
            [
                'name' => 'Sistema Altavoces Home Theatre BT AUX SD Amfm 90Watt',
                'brand' => 'Berlin electronics',
                'slug' => Str::slug('Sistema Altavoces Home Theatre BT AUX SD Amfm 90Watt', '-'),
                'description' => 'Desde 2007 Auna viene con creciente éxito con su punto fuerte en reunir sonido, diseño y los últimos tecnología en avances al mejor precio posible. Producto alemán de Berlin Electronics que incluye una amplia gama de productos equipos hifi, altavoces, micrófonos auriculares, equipos hifi para carros con altos estándares de calidad, especialmente diseñados para ofrecer un sonido inigualable.',
                'price' => 895000,
                'quantity' => 40,
                'offerDiscount' => 10,
                'category_id' => 1031,
            ],
            [
                'name' => 'Sistema Profesional de cine en casa RCA 1000 W Bluetooth',
                'brand' => 'Berlin electronics',
                'slug' => Str::slug('Sistema Profesional de cine en casa RCA 1000 W Bluetooth', '-'),
                'description' => ' Presentamos el RCA 1000 W Sistema de Home Theater rt2781be con tecnología Bluetooth. Con tecnología Bluetooth inalámbrica, puede transmitir y disfruta de todo tu música favorita desde tu Android, Windows o dispositivos de Apple. Con 1000 W de potencia de salida total, el sistema de cine en casa de RCA con Bluetooth da vida a tu música, películas y programas de televisión favoritos. Disfruta del verdadero sonido cinematográfico con cinco altavoces satélite y un subwoofer.',
                'price' => 1300000,
                'quantity' => 40,
                'offerDiscount' => 0,
                'category_id' => 1031,
            ],
            [
                'name' => 'Barra Sonido 2.1CH Kalley K-ABSD120SW 120W',
                'brand' => 'Kalley',
                'slug' => Str::slug('Barra Sonido 2.1CH Kalley K-ABSD120SW 120W', '-'),
                'description' => 'En la Barra de Sonido 2.1CH Kalley K-ABSD120SW puedes disfrutar un audio de alta calidad logrando sonidos más fieles sin interferencias electromagnéticas. Si te gusta amplificar tu música, esta barra de sonido Kalley es ideal para ti. ',
                'price' => 490000,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1031,
            ],
            //End Electronics 10
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        $images = [ //Start Electronics
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/597158',
                'product_id' => 1261,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/597159',
                'product_id' => 1261,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/597160',
                'product_id' => 1261,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/682607',
                'product_id' => 1271,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/682625',
                'product_id' => 1281,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/682626',
                'product_id' => 1281,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/682627',
                'product_id' => 1281,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/307356',
                'product_id' => 1291,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/307357',
                'product_id' => 1291,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/307358',
                'product_id' => 1291,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/686644',
                'product_id' => 1301,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/686645',
                'product_id' => 1301,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/686646',
                'product_id' => 1301,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/261901',
                'product_id' => 1311,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/261902',
                'product_id' => 1311,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/261903',
                'product_id' => 1311,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/732651',
                'product_id' => 1321,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/732652',
                'product_id' => 1321,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/732653',
                'product_id' => 1321,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/463774',
                'product_id' => 1331,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/463776',
                'product_id' => 1331,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/568906',
                'product_id' => 1341,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/259661',
                'product_id' => 1351,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/259662',
                'product_id' => 1351,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/259663',
                'product_id' => 1351,
            ]
            //End Electronics
        ];

        foreach ($images as $image) {
            Image::create($image);
        }
    }
}
