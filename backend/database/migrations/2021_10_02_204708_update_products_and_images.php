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
				[
					'id' => 1045,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5333112',
				],
				[
					'id' => 1046,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5333113',
				],
				[
					'id' => 1047,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5333114',
				],
				[
					'id' => 1059,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5331537',
				],
				[
					'id' => 1060,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5331536',
				],
				[
					'id' => 1064,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5331347',
				],
				[
					'id' => 1065,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5331348',
				],
				[
					'id' => 1066,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5331349',
				],
				[
					'id' => 1051,
					'url' => 'https://exitocol.vteximg.com.br/arquivos/ids/603645',
				],
				[
					'id' => 1056,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5332537',
				],
				[
					'id' => 1057,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5332840',
				],
				[
					'id' => 1058,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5332841',
				],
				[
					'id' => 1054,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5345110',
				],
				[
					'id' => 1055,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5345107',
				],
				[
					'id' => 1061,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5332792',
				],
				[
					'id' => 1062,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5332789',
				],
				[
					'id' => 1063,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5332790',
				],
				[
					'id' => 1148,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10208200',
				],
				[
					'id' => 1149,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10208201',
				],
				[
					'id' => 1150,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10208202',
				],
				[
					'id' => 1146,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10206862',
				],
				[
					'id' => 1147,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10206861',
				],
				[
					'id' => 1132,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10190931',
				],
				[
					'id' => 1133,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10190932',
				],
				[
					'id' => 1134,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10190933',
				],
				[
					'id' => 1120,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/5384335',
				],
				[
					'id' => 1151,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10192687',
				],
				[
					'id' => 1152,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10192688',
				],
				[
					'id' => 1153,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/10192689',
				],
				[
					'id' => 1119,
					'url' => 'https://exitocol.vtexassets.com/arquivos/ids/641887'
				],
			];

			foreach ($images as $image) {
				$item = Image::find($image['id']);
				if ($item) {
					$item->update($image);  
				} else {
					Image::create($image);
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
