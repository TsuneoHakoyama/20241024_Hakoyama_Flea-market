<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoritesTableSeeder extends Seeder
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
            'item_id' => 2,
        ];
        DB::table('favorites')->insert($param);
        $param = [
            'user_id' => 1,
            'item_id' => 10,
        ];
        DB::table('favorites')->insert($param);
    }
}