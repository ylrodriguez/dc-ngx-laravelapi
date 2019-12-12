<?php

use App\Image;
use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HeadphonesProducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [ // >>>>>>>>>>>>>> Start Headphones
            [
                'name' => 'Audífonos Bluetooth Xiaomi Redmi Airdots',
                'brand' => 'Xiaomi',
                'slug' => Str::slug('Audífonos Bluetooth Xiaomi Redmi Airdots', '-'),
                'description' => 'BATERÍA DE LARGA DURACIÓN La poderosa batería de polímero de litio recargable con gran capacidad garantiza hasta 4 horas de reproducción de música, 4 horas de llamada, 150 horas de tiempo en espera.',
                'price' => 150000,
                'quantity' => 40,
                'offerDiscount' => 30,
                'category_id' => 1061,
            ],
            [
                'name' => 'Audifonos Samsung Galaxy Buds Negro',
                'brand' => 'Samsung',
                'slug' => Str::slug('Audifonos Samsung Galaxy Buds Negro', '-'),
                'description' => 'La siguiente generación de Galaxy Buds. No solo son buenos para escuchar, sino también para ser escuchados. Siempre por el buen camino con su entrenador integrado',
                'price' => 700000,
                'quantity' => 40,
                'offerDiscount' => 35,
                'category_id' => 1061,
            ],
            [
                'name' => 'Audifonos Earpods MD827M-B Manos Libres',
                'brand' => 'Apple',
                'slug' => Str::slug('Audifonos Earpods MD827M-B Manos Libres', '-'),
                'description' => 'El diseño de los EarPods está definido por la geometría del oído. Esto los hace más cómodos de usar que cualquier otro audífono similar. Las bocinas del interior de los EarPods han sido diseñadas para mejorar la calidad del sonido y minimizar su pérdida. ¿El resultado? Un audio de alta calidad.',
                'price' => 95000,
                'quantity' => 40,
                'offerDiscount' => 50,
                'category_id' => 1061,
            ],
            [
                'name' => 'Audífonos Bluetooth i11 TWS Táctiles-Blancos',
                'brand' => 'Genérico',
                'slug' => Str::slug('Audífonos Bluetooth i11 TWS Táctiles-Blancos', '-'),
                'description' => 'Disfruta de tus canciones favoritas con los Audífonos Inalámbricos I11, pues gracias a su tecnología inalámbrica y táctil dejarás atrás los cables; salta, corre, juega, haz cualquier tipo de actividad con ellos y verás lo cómodo que será liberarte de los cables, sin perder la calidad del sonido con un diseño ergonómico inteligente para que nunca se caigan de tus oídos. Además, cuentan con una caja de carga para que la puedas llevar contigo a donde quieras y la música nunca pare.',
                'price' => 95000,
                'quantity' => 40,
                'offerDiscount' => 25,
                'category_id' => 1061,
            ],
            [
                'name' => 'i7s audifonos manos libres inalambricos para smartphone',
                'brand' => 'TWS',
                'slug' => Str::slug('i7s audifonos manos libres inalambricos para smartphone', '-'),
                'description' => 'Diseño ergonómico y liviano: el diseño súper liviano garantiza un ajuste seguro y cómodo para cualquier oído. El material anti-sudor mantiene los auriculares completamente funcionales incluso cuando gotea sudor',
                'price' => 120000,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1061,
            ],
            [
                'name' => 'Audifonos Apple AirPods Wireless Bluetooth',
                'brand' => 'Apple',
                'slug' => Str::slug('Audifonos Apple AirPods Wireless Bluetooth', '-'),
                'description' => 'Sácalos del estuche y estarán listos para funcionar con todos tus dispositivos. Póntelos y se conectarán al instante. Habla y tu voz se escuchará con una claridad sorprendente. Te presentamos los AirPods. La simplicidad y la tecnología unidas a la perfección. El resultado es absolutamente mágico.',
                'price' => 900000,
                'quantity' => 40,
                'offerDiscount' => 10,
                'category_id' => 1061,
            ],
            [
                'name' => 'Audifonos Manos Libres Bluetooth Tipo Earpods In Ear Negro',
                'brand' => 'Genérico',
                'slug' => Str::slug('Audifonos Manos Libres Bluetooth Tipo Earpods In Ear Negro', '-'),
                'description' => 'AUDIFONOS MANOS LIBRES BLUETOOTH PARA HACER DEPORTE Y DEMAS USOS 100% COMPATIBLES CON ANDROID, WINDOWS, IOS (IPHONE, IPAD, MACBOOK, IPOD)
                CARACTERISTICAS PRINCIPALES',
                'price' => 50000,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1061,
            ],
            [
                'name' => 'Audifonos Originales Samsung AKG S8 Y S8 Plus Color Negro',
                'brand' => 'Samsung',
                'slug' => Str::slug('Audifonos Originales Samsung AKG S8 Y S8 Plus Color Negro', '-'),
                'description' => 'Disfruta de la música que más te gusta en tu Samsung s8, Samsung s8 plus con estos audífonos que tienen excelente calidad en sonido, con control de volumen. Contesta llamadas sin necesidad de sacar tu celular del bolsillo, gracias a su botón para contestar.',
                'price' => 80000,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1061,
            ],
            [
                'name' => 'Audifonos Originales Samsung Galaxy J1 J3 J5 J7 Prime Ace',
                'brand' => 'Samsung',
                'slug' => Str::slug('Audifonos Originales Samsung Galaxy J1 J3 J5 J7 Prime Ace', '-'),
                'description' => 'Audífonos Manos Libres Samsung Para Galaxy J1 J2 J5 J7 Gran Prime - Ace
                Referenica: EHS61ASFWE',
                'price' => 41000,
                'quantity' => 10,
                'offerDiscount' => 20,
                'category_id' => 1061,
            ],
            [
                'name' => 'Aud Fono Sony Tipo Diadema MdR-Zx110',
                'brand' => 'Sony',
                'slug' => Str::slug('Aud Fono Sony Tipo Diadema MdR-Zx110', '-'),
                'description' => 'Un elegante teclado con una excelente relación calidad/precio Este teclado anti-derrame incorpora todas las funciones que necesita, y algunas más, con la calidad y confiabilidad propias de Microsoft. Disfrute de la configuración conectar y listo, integración con Windows Vista®, compatibilidad con Microsoft® Xbox 360® y teclas silenciosas con acceso rápido a los controles multimedia y a la calculadora.',
                'price' => 40000,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1061,
            ],
            //End Headphones 10
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        $images = [ //Start Headphones

            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/395300',
                'product_id' => 1561,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/395296',
                'product_id' => 1561,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/395297',
                'product_id' => 1561,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/259227',
                'product_id' => 1571,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/259228',
                'product_id' => 1571,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/259229',
                'product_id' => 1571,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/322330',
                'product_id' => 1581,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/322328',
                'product_id' => 1581,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/322329',
                'product_id' => 1581,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/668777',
                'product_id' => 1591,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/668778',
                'product_id' => 1591,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/668779',
                'product_id' => 1591,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/318823',
                'product_id' => 1601,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/318822',
                'product_id' => 1601,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/254805',
                'product_id' => 1611,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/254806',
                'product_id' => 1611,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/678106',
                'product_id' => 1621,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/678107',
                'product_id' => 1621,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/678108',
                'product_id' => 1621,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/678275',
                'product_id' => 1631,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/678276',
                'product_id' => 1631,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/678277',
                'product_id' => 1631,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/678167',
                'product_id' => 1641,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/678168',
                'product_id' => 1641,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/678169',
                'product_id' => 1641,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/193464',
                'product_id' => 1651,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/193465',
                'product_id' => 1651,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/193464',
                'product_id' => 1651,
            ]
            //End Headphones
        ];

        foreach ($images as $image) {
            Image::create($image);
        }
    }
}
