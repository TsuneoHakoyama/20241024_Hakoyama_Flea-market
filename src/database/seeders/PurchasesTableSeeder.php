<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchasesTableSeeder extends Seeder
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
            'payment_id' => 1,
        ];
        DB::table('purchases')->insert($param);
        $param = [
            'user_id' => 1,
            'item_id' => 5,
            'payment_id' => 1,
        ];
        DB::table('purchases')->insert($param);
    }
}
