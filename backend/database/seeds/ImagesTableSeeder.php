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
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/270234',
                'product_id' => 1
            ],
            [
                'url' => 'https://brain-images-ssl.cdn.dixons.com/7/8/10151587/l_10151587_002.jpg',
                'product_id' => 1
            ],
            [
                'url' => 'https://www.cellularishop.com/373-large_default/apple-iphone-32-gb-6s-oro-italia.jpg',
                'product_id' => 1
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/598943',
                'product_id' => 2
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/256948',
                'product_id' => 2
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/598945',
                'product_id' => 2
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/298339',
                'product_id' => 3
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/270187',
                'product_id' => 4
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/270188',
                'product_id' => 4
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/270189',
                'product_id' => 4
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/269295',
                'product_id' => 5
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/269296',
                'product_id' => 5
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/269297',
                'product_id' => 5
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/403174',
                'product_id' => 6
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/403177',
                'product_id' => 6
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/598962',
                'product_id' => 7
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/259543',
                'product_id' => 7
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/259544',
                'product_id' => 7
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/602838',
                'product_id' => 8
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/255931',
                'product_id' => 8
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/255933',
                'product_id' => 8
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/602992',
                'product_id' => 9
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/256976',
                'product_id' => 9
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/256977',
                'product_id' => 9
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/598442',
                'product_id' => 10
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/598438',
                'product_id' => 10
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/298864',
                'product_id' => 11
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/298865',
                'product_id' => 11
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/602651',
                'product_id' => 12
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/254796',
                'product_id' => 12
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/598389',
                'product_id' => 13
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/350262',
                'product_id' => 13
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/602780',
                'product_id' => 14
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/316802',
                'product_id' => 14
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/316803',
                'product_id' => 14
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/599929',
                'product_id' => 15
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/581769',
                'product_id' => 15
            ],
            [
                'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/581770',
                'product_id' => 15
            ],
        ];

        foreach ($images as $image) {
            Image::create($image);
        }
    }
}
