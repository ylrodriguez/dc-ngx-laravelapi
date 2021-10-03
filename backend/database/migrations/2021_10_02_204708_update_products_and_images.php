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
					'id' => 2121,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/2426823',
				],
				[
					'id' => 2131,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/2426526',
				],
				[
					'id' => 2141,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/2426527',
				],
				[
					'id' => 2061,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/643143',
				],
				[
					'id' => 2071,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/643144',
				],
				[
					'id' => 2081,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/643144',
				],
				[
					'id' => 2361,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4882551',
				],
				[
					'id' => 2371,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4882549',
				],
				[
					'id' => 2381,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4882550',
				],
				[
					'id' => 2291,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4820549',
				],
				[
					'id' => 2301,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4820550',
				],
				[
					'id' => 2041,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4823912',
				],
				[
					'id' => 2051,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4823913',
				],
				[
					'id' => 2061,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4823914',
				],
				[
					'id' => 2221,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4819123',
				],
				[
					'id' => 2231,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4819121',
				],
				[
					'id' => 2241,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4819122',
				],
				[
					'id' => 2311,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4819072',
				],
				[
					'id' => 2321,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/4819073',
				],
				[
					'id' => 2451,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5333112',
				],
				[
					'id' => 2461,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5333113',
				],
				[
					'id' => 2471,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5333114',
				],
				[
					'id' => 2591,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5331537',
				],
				[
					'id' => 2601,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5331536',
				],
				[
					'id' => 2641,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5331347',
				],
				[
					'id' => 2651,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5331348',
				],
				[
					'id' => 2661,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5331349',
				],
				[
					'id' => 2511,
					'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/603645',
				],
				[
					'id' => 2561,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5332537',
				],
				[
					'id' => 2571,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5332840',
				],
				[
					'id' => 2581,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5332841',
				],
				[
					'id' => 2541,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5345110',
				],
				[
					'id' => 2551,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5345107',
				],
				[
					'id' => 2611,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5332792',
				],
				[
					'id' => 2621,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5332789',
				],
				[
					'id' => 2631,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5332790',
				],
				[
					'id' => 2481,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10208200',
				],
				[
					'id' => 2491,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10208201',
				],
				[
					'id' => 2501,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10208202',
				],
				[
					'id' => 2461,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10206862',
				],
				[
					'id' => 2471,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10206861',
				],
				[
					'id' => 2321,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10190931',
				],
				[
					'id' => 2331,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10190932',
				],
				[
					'id' => 2341,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10190933',
				],
				[
					'id' => 2201,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5384335',
				],
				[
					'id' => 2511,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10192687',
				],
				[
					'id' => 2521,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10192688',
				],
				[
					'id' => 2531,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10192689',
				],
				[
					'id' => 2191,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/641887'
				],
			];

			foreach ($images as $image) {
				$item = Image::find($image['id']);
				if ($item) {
					$item->update($image);  
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
