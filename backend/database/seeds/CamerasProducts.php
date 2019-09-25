<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Product;
use App\Image;

class CamerasProducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [ // >>>>>>>>>>>>>> Start Cameras
            [
                'name' => 'Combo Nikon B500 + 32GB + Estuche',
                'brand' => 'Nikon',
                'slug' => Str::slug('Combo Nikon B500 + 32GB + Estuche', '-'),
                'description' => 'La COOLPIX B500 se siente grandiosa en sus manos; sin importar si está haciendo zoom con su lente de cristal súper telefoto NIKKOR o grabando un video en Full HD de 1080p con la pantalla LCD inclinable.',
                'price' => 2200000,
                'quantity' => 40,
                'offerDiscount' => 60,
                'category_id' => 1004,
            ],
            [
                'name' => 'Cámara GOPRO Hero 7 Black',
                'brand' => 'GOPRO',
                'slug' => Str::slug('Cámara GOPRO Hero 7 Black', '-'),
                'description' => 'Estabilización Superfluido de video Video TimeWarp Transmisión en vivo Video en cámara lenta de 8 fps Detección de rostro, sonrisa y escena Resistente y sumergible, resistente y sumergible sin carcasa hasta 10 m Control por voz SúperFoto aplica de manera inteligente HDR, mapeo tonal local o reducción de ruido para optimizar las fotos. ',
                'price' => 1800000,
                'quantity' => 40,
                'offerDiscount' => 30,
                'category_id' => 1004,
            ],
            [
                'name' => 'Camara Canon T6-1300D lente 18 55mm',
                'brand' => 'Canon',
                'slug' => Str::slug('Camara Canon T6-1300D lente 18 55mm', '-'),
                'description' => 'Bateria Lition Video Full Hd Lente 18-55mm Megapixel 18 Mpx',
                'price' => 1590000,
                'quantity' => 40,
                'offerDiscount' => 0,
                'category_id' => 1004,
            ],
            [
                'name' => 'Cámara Nikon D7500 Lente 18-140Mm + Memoria 16Gb + Maletín',
                'brand' => 'Nikon',
                'slug' => Str::slug('Cámara Nikon D7500 Lente 18-140Mm + Memoria 16Gb + Maletín', '-'),
                'description' => 'La Nikon D7500 es una cámara fantástica, con un gran diseño, gran rapidez de manejo, calidad de imagen tanto vídeo como foto sensacional, es un todoterreno que está en limite de la clase aficionado profesional en kit con el objetivo con zoom ofrece una buena relación calidad-precio.',
                'price' => 6000000,
                'quantity' => 40,
                'offerDiscount' => 30,
                'category_id' => 1004,
            ],
            [
                'name' => 'Cámara Nikon D3500 Kit 18 - 55mm',
                'brand' => 'Nikon',
                'slug' => Str::slug('Cámara Nikon D3500 Kit 18 - 55mm', '-'),
                'description' => 'No hace falta ser fotógrafo para reconocer una buena fotografía. Tampoco necesita ser fotógrafo para tomar fotos increíbles; solo necesita la D3500. Es una cámara tan sencilla de usar como aquellas para apuntar y disparar, pero permite tomar increíbles fotos y videos con la calidad de una DSLR que realmente harán la diferencia. ',
                'price' => 1790000,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1004,
            ],
            [
                'name' => 'Cámara Sony A7 Iii Cuerpo',
                'brand' => 'Sony',
                'slug' => Str::slug('Cámara Sony A7 Iii Cuerpo', '-'),
                'description' => 'Modelo A7 III Conexión WIFI o nfc Flash SI Sensibilidad ISO ISO 100–25600 Sensor de imagen CMOS 24.5 Garantía proveedor 12 meses Tipo de Batería Batería recargable NP-FZ100 Temporizador SI',
                'price' => 7800000,
                'quantity' => 40,
                'offerDiscount' => 10,
                'category_id' => 1004,
            ],
            [
                'name' => 'Cámara compacta Sony W800 zoom 5x 20.1MP Negro',
                'brand' => 'Sony',
                'slug' => Str::slug('Cámara compacta Sony W800 zoom 5x 20.1MP Negro', '-'),
                'description' => 'Fotografías divertidas simplemente Ya sean fotos de noche o de vacaciones, la W800, una cámara digital compacta, cuenta con muchas funciones que hacen que sea fácil capturar bellas fotos nítidas y video HD. Acércate más con el zoom óptico de 5x y cambia al modo fiesta para obtener excelentes tomas sin sacrificar la diversión.',
                'price' => 500000,
                'quantity' => 40,
                'offerDiscount' => 0,
                'category_id' => 1004,
            ],
            [
                'name' => 'Combo Camara Canon T7I + Super Combo',
                'brand' => 'Canon',
                'slug' => Str::slug('Combo Camara Canon T7I + Super Combo', '-'),
                'description' => 'Contenido Super Combo: - Camara, lente 18-55mm, Bateria, cargador, correa - Memoria 64gb - Tripode - Kit de Filtros - Kit de Limpieza - Maletin - Lentillas: Macro 0.43x y Telephoto 2.2x - Control - Lector de Memoria - Bomba de Aire - Lapiz lente.',
                'price' => 3690000,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1004,
            ],
            [
                'name' => 'Canon EOS Rebel T7 - 2000D DSLR 18-55mm + Super Combo',
                'brand' => 'Canon',
                'slug' => Str::slug('Canon EOS Rebel T7 - 2000D DSLR 18-55mm + Super Combo', '-'),
                'description' => 'Ideal para usuarios de dispositivos móviles que desean dar el siguiente paso en su fotografía, la cámara EOS Rebel T7 combina fantásticas características con una operación sencilla de uso para obtener imágenes de alta calidad que usted compartirá con orgullo. ',
                'price' => 2490000,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1004,
            ],
            [
                'name' => 'Camara Canon Eos 80D 18-135 Stm + Combo Plus',
                'brand' => 'Canon',
                'slug' => Str::slug('Camara Canon Eos 80D 18-135 Stm + Combo Plus', '-'),
                'description' => 'a EOS 80D cámara incorpora un nuevo desarrollo de 24,2 megapíxeles del sensor (APS-C) CMOS que no sólo captura imágenes de alta resolución, pero también cuenta con píxeles individuales refinados que permiten altas velocidades ISO de 16000 para fotografías fijas (ampliable a 25600) y 12800 para el películas (ampliable a 16000, 25600). ',
                'price' => 4390000,
                'quantity' => 40,
                'offerDiscount' => 10,
                'category_id' => 1004,
            ],
            //End Cameras 10
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        $images = [ //Start Cameras

            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/325826',
                'product_id' => 1036,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/325822',
                'product_id' => 1036,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/325823',
                'product_id' => 1036,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/260017',
                'product_id' => 1037,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/260013',
                'product_id' => 1037,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/260014',
                'product_id' => 1037,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/643155',
                'product_id' => 1038,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/643153',
                'product_id' => 1038,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/643154',
                'product_id' => 1038,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/356907',
                'product_id' => 1039,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/356903',
                'product_id' => 1039,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/356904',
                'product_id' => 1039,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/308012',
                'product_id' => 1040,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/308011',
                'product_id' => 1040,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/309554',
                'product_id' => 1041,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/309552',
                'product_id' => 1041,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/309553',
                'product_id' => 1041,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/352471',
                'product_id' => 1042,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/352472',
                'product_id' => 1042,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/643146',
                'product_id' => 1043,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/309567',
                'product_id' => 1044,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/309565',
                'product_id' => 1044,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/309566',
                'product_id' => 1044,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/259719',
                'product_id' => 1045,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/259720',
                'product_id' => 1045,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/259721',
                'product_id' => 1045,
            ]
            //End Cameras
        ];

        foreach ($images as $image) {
            Image::create($image);
        }
    }
}