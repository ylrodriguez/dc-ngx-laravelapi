<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Str;
use App\Product;
use App\Image;

class UpdateProductsAndImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$images = [
				[
					'id' => 1112,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/2426823',
				],
				[
					'id' => 1113,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/2426526',
				],
				[
					'id' => 1114,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/2426527',
				],
				[
					'id' => 1106,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/643143',
				],
				[
					'id' => 1107,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/643144',
				],
				[
					'id' => 1108,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/643144',
				],
				[
					'id' => 1036,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4882551',
				],
				[
					'id' => 1037,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4882549',
				],
				[
					'id' => 1038,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4882550',
				],
				[
					'id' => 1029,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4820549',
				],
				[
					'id' => 1030,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4820550',
				],
				[
					'id' => 1004,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4823912',
				],
				[
					'id' => 1005,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4823913',
				],
				[
					'id' => 1006,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4823914',
				],
				[
					'id' => 1022,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4819123',
				],
				[
					'id' => 1023,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4819121',
				],
				[
					'id' => 1024,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4819122',
				],
				[
					'id' => 1031,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4819072',
				],
				[
					'id' => 1032,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4819073',
				],
				// [
				// 	'id' => 0,
				// 	'url' => '',
				// ],
			];

			foreach ($images as $image) {
				$item = Image::find($image['id']);
				if ($item) {
					$item->update($image);  
				} else {
					Image::create($item);
				}
			}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
