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
                'name' => 'Videojuego Red Dead Redemption 2 PlayStation 4',
                'brand' => 'Rockstart Games',
                'slug' => Str::slug('Videojuego Red Dead Redemption 2 PlayStation 4', '-'),
                'description' => 'La historia de Arthur Morgan; (no Nate Harlow héroe de Red Dead Revolver; ni tampoco John Marston; el protagonista del Redemption original) es una aventura western con una extraordinaria atmósfera y ambientación muy cuidada y centrada en la naturaleza que; además de modo individual de juego; también presenta multijugador centrado en seguir la senda de GTA Online.',
                'price' => 250000,
                'quantity' => 40,
                'offerDiscount' => 30,
                'category_id' => 1005                                                                                                                                  ,
            ],
            [
                'name' => 'Videojuego Uncharted The Nathan Drake Collection PS4',
                'brand' => 'Sony',
                'slug' => Str::slug('Videojuego Uncharted The Nathan Drake Collection PS4', '-'),
                'description' => 'Disfruta de una de las series de juegos más admiradas siguiendo los pasos de Nathan Drake en una peligrosa aventura.',
                'price' => 140000,
                'quantity' => 40,
                'offerDiscount' => 50,
                'category_id' => 1005,
            ],
            [
                'name' => 'Videojuego FIFA 20 - PlayStation 4',
                'brand' => 'EA Sports',
                'slug' => Str::slug('Videojuego FIFA 20 - PlayStation 4', '-'),
                'description' => 'Videojuego FIFA 20 - PlayStation 4',
                'price' => 250000,
                'quantity' => 40,
                'offerDiscount' => 25,
                'category_id' => 1005,
            ],
            [
                'name' => 'Pro Evolution 2020 PES 20 PS4',
                'brand' => 'Konami',
                'slug' => Str::slug('Pro Evolution 2020 PES 20 PS4', '-'),
                'description' => 'Llegan potentes cambios en la jugabilidad en efootball pes 2020. Nueva técnica de regates: regate sutil. Actualización de mecánicas de control del balón. Tiro preciso en circunstancias delicadas. Comportamiento defensive auténtico. Mejoras de la física del balón. Interacción del jugador adaptable: motivar. Juega como Ronaldinho',
                'price' => 230000,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1005,
            ],
            [
                'name' => 'Juego Gta Five Grand Theft Auto 5 Ps4',
                'brand' => 'Rockstar Games',
                'slug' => Str::slug('Juego Gta Five Grand Theft Auto 5 Ps4', '-'),
                'description' => 'Material: Plastico. Color: Varios',
                'price' => 120000,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1005,
            ],
            [
                'name' => 'Mortal Kombat 11 Ps4 Playstation Fisico Juego',
                'brand' => 'Sony',
                'slug' => Str::slug('Mortal Kombat 11 Ps4 Playstation Fisico Juego', '-'),
                'description' => 'GAME BROTHERS TRAE -Una de las mejores experiencias de juego, pelea con todo el desgarro y sangre. Las caracteristicas y esencia son un culto, mortal kombat debuta con una entrega que promete ser de los mejores lanzamientos.',
                'price' => 240000,
                'quantity' => 40,
                'offerDiscount' => 40,
                'category_id' => 1005,
            ],
            [
                'name' => 'Juego Tony Hawk Pro Skater 5ps',
                'brand' => 'Digiblue',
                'slug' => Str::slug('Juego Tony Hawk Pro Skater 5ps', '-'),
                'description' => 'Género de videojuegos: Deporte. Referencia: 70669',
                'price' => 160000,
                'quantity' => 40,
                'offerDiscount' => 0,
                'category_id' => 1005,
            ],
            [
                'name' => 'Videojuego Resident Evil 7 En Español PS4',
                'brand' => 'Sony',
                'slug' => Str::slug('Videojuego Resident Evil 7 En Español PS4', '-'),
                'description' => 'Resident Evil marca el inicio de una nueva era de innovación, inmersión y terror visceral. Resident Evil 7 fija un nuevo rumbo para la franquicia Resident Evil que aprovecha sus raíces y abre la puerta a una experiencia. Ambientada en una América rural moderna y tiene lugar tras los dramáticos sucesos de Resident Evil 6, los jugadores experimentarán el terror directamente bajo una perspectiva de primera persona..',
                'price' => 150000,
                'quantity' => 40,
                'offerDiscount' => 10,
                'category_id' => 1005,
            ],
            [
                'name' => 'Crash Team Racing Nitro Fueled CTR PS4 - PlayStation 4',
                'brand' => 'Crash Team ',
                'slug' => Str::slug('Crash Team Racing Nitro Fueled CTR PS4 - PlayStation 4', '-'),
                'description' => 'Crash Team Racing, el divertido videojuego de karts que protagonizaron los personajes más conocidos de esta saga en los tiempos de la primera PlayStation. En la remasterización Crash Team Racing Nitro-Fueled no solo vamos a encontrarnos aquel mítico videojuego con gráficos muy mejorados, ¡se ve genial!, sino también algunos de los personajes y circuitos que en aquel entonces no pudieron añadirse. ¡Crash vuelve a los karts!',
                'price' => 180000,
                'quantity' => 40,
                'offerDiscount' => 20,
                'category_id' => 1005,
            ],
            [
                'name' => 'Videojuego God of War PS4',
                'brand' => 'Sony',
                'slug' => Str::slug('Videojuego God of War PS4', '-'),
                'description' => 'Vídeojuego de la saga God of War que responde al escueto nombre de God of War; y que traslada su fórmula jugable desde la antigua Grecia de las aventuras de Kratos a una ambientación nórdica de lo más llamativa donde retorna su carismático protagonista en una historia de padre e hijo que promete recuperar una parte de la humanidad perdida del espartano gracias a la presencia de su vástago; de nombre Atreus',
                'price' => 200000,
                'quantity' => 30,
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
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/641222',
                'product_id' => 1046,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/642118',
                'product_id' => 1047,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/683346',
                'product_id' => 1048,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/666394',
                'product_id' => 1049,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/666395',
                'product_id' => 1049,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/666396',
                'product_id' => 1049,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/255243',
                'product_id' => 1050,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/640352',
                'product_id' => 1051,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/640350',
                'product_id' => 1051,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/640351',
                'product_id' => 1051,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/208086',
                'product_id' => 1052,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/642100',
                'product_id' => 1053,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/685911',
                'product_id' => 1054,
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/627226',
                'product_id' => 1055,
            ]
            //End Video Games
        ];

        foreach ($images as $image) {
            Image::create($image);
        }
    }
}
