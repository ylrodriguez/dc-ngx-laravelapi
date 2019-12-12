<?php

use Illuminate\Database\Seeder;
use App\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [ // Phones
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/270234',
                'product_id' => 1011
            ],
            [
                'url' => 'https://brain-images-ssl.cdn.dixons.com/7/8/10151587/l_10151587_002.jpg',
                'product_id' => 1011
            ],
            [
                'url' => 'https://www.cellularishop.com/373-large_default/apple-iphone-32-gb-6s-oro-italia.jpg',
                'product_id' => 1011
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/598943',
                'product_id' => 1021
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/256948',
                'product_id' => 1021
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/598945',
                'product_id' => 1021
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/298339',
                'product_id' => 1031
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/270187',
                'product_id' => 1041
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/270188',
                'product_id' => 1041
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/270189',
                'product_id' => 1041
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/269295',
                'product_id' => 1051
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/269296',
                'product_id' => 1051
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/269297',
                'product_id' => 1051
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/403174',
                'product_id' => 1061
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/403177',
                'product_id' => 1061
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/598962',
                'product_id' => 1071
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/259543',
                'product_id' => 1071
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/259544',
                'product_id' => 1071
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/602838',
                'product_id' => 1081
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/255931',
                'product_id' => 1081
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/255933',
                'product_id' => 1081
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/602992',
                'product_id' => 1091
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/256976',
                'product_id' => 1091
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/256977',
                'product_id' => 1091
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/598442',
                'product_id' => 1101
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/598438',
                'product_id' => 1101
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/298864',
                'product_id' => 1111
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/298865',
                'product_id' => 1111
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/602651',
                'product_id' => 1121
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/254796',
                'product_id' => 1121
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/598389',
                'product_id' => 1131
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/350262',
                'product_id' => 1131
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/602780',
                'product_id' => 1141
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/316802',
                'product_id' => 1141
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/316803',
                'product_id' => 1141
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/599929',
                'product_id' => 1151
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/581769',
                'product_id' => 1151
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/581770',
                'product_id' => 1151
            ], //End Phones
        ];

        foreach ($images as $image) {
            Image::create($image);
        }
    }
}
