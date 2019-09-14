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
        ];

        foreach ($images as $image) {
            Image::create($image);
        }
    }
}
