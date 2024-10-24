<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'name' => 'コーヒーミル',
            'price' => 5999,
            'company_id' => 1,
            'condition_id' => 1,
            'description' => '強力モーターで素早く粉砕。一度に30gまで。水洗い可でお手入れ簡単。',
            'image' => 'storage/images/items/coffee-mill.jpg'
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 3,
            'name' => 'アイスクリームメーカー',
            'price' => 2950,
            'company_id' => 4,
            'condition_id' => 1,
            'description' => 'コンパクトサイズなので冷凍庫でも邪魔にならない。一度に3人分の食べきり量が材料を入れて20分で完成。',
            'image' => 'storage/images/items/ice-cream-maker.jpg'
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 5,
            'name' => 'ヨーグルトメーカー',
            'price' => 5600,
            'company_id' => 3,
            'condition_id' => 1,
            'description' => '牛乳パックそのままで作れるので簡単で衛生的。添付のレシピブックにはアレンジレシピも掲載しています。',
            'image' => 'storage/images/items/yogurt-maker.jpg'
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 2,
            'name' => 'スープメーカー',
            'price' => 13980,
            'company_id' => 2,
            'condition_id' => 1,
            'description' => '材料を入れてボタンをひと押しするだけでおいしいスープが完成します。大容量で家族みんなで楽しめる量がボタン一つで作れます。',
            'image' => 'storage/images/items/soup-maker.jpg'
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 4,
            'name' => 'コードレス掃除機',
            'price' => 32980,
            'company_id' => 4,
            'condition_id' => 1,
            'description' => '強力な吸引力と静かな運転音を両立。フル充電で最長50分の運転が可能。高性能フィルターで排気もきれい。',
            'image' => 'storage/images/items/cleaner.jpg'
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 6,
            'name' => 'スチームアイロン',
            'price' => 2690,
            'company_id' => 3,
            'condition_id' => 1,
            'description' => 'コンパクトで重さを感じにくく使いやすい。タンク容量が大きく給水の手間を省けます。高温スチームで除菌脱臭も。',
            'image' => 'storage/images/items/steam-iron.jpg'
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 4,
            'name' => 'ハンディクリーナー',
            'price' => 3680,
            'company_id' => 2,
            'condition_id' => 1,
            'description' => '交換可能なノズル付きで、様々な場所のホコリを簡単に掃除。大容量バッテリーで30分間の連続使用が可能。',
            'image' => 'storage/images/items/handy-cleaner.jpg'
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'name' => 'ドライヤー',
            'price' => 4590,
            'company_id' => 1,
            'condition_id' => 1,
            'description' => 'コンパクトで重さを感じにくく使いやすい。タンク容量が大きく給水の手間を省けます。高温スチームで除菌脱臭も。',
            'image' => 'storage/images/items/hairdryer.jpg'
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 3,
            'name' => 'フェイススチーマー',
            'price' => 6020,
            'company_id' => 3,
            'condition_id' => 1,
            'description' => '暖かいスチームで肌をやわらげ毛穴の奥の汚れも取り易くします。たっぷりの蒸気で顔全体をしっかり保湿。',
            'image' => 'storage/images/items/steamer.jpg'
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 5,
            'name' => '電動髭剃り',
            'price' => 35900,
            'company_id' => 4,
            'condition_id' => 1,
            'description' => '濃いひげもしっかり深剃り。立体ヘッドが肌にピッタリ密着。自動洗浄充電器付きで清潔に保てます。',
            'image' => 'storage/images/items/shaver.jpg'
        ];
        DB::table('items')->insert($param);
    }
}
