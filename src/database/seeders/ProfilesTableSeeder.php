<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            'user_id' => 1,
            'name' => 'テスト一郎',
            'postcode' => '1310045',
            'address' => '東京都墨田区押上1-1-2'
        ];
        DB::table('profiles')->insert($param);
        $param = [
            'user_id' => 2,
            'name' => 'テスト次郎',
            'postcode' => '1050011',
            'address' => '東京都港区芝公園4-2-8'
        ];
        DB::table('profiles')->insert($param);
        $param = [
            'user_id' => 3,
            'name' => 'テスト三郎',
            'postcode' => '1066108',
            'address' => '東京都港区六本木6-10-1'
        ];
        DB::table('profiles')->insert($param);
        $param = [
            'user_id' => 4,
            'name' => 'テスト四郎',
            'postcode' => '1310045',
            'address' => '東京都墨田区押上1-1-2'
        ];
        DB::table('profiles')->insert($param);
        $param = [
            'user_id' => 5,
            'name' => 'テスト五郎',
            'postcode' => '1050011',
            'address' => '東京都港区芝公園4-2-8'
        ];
        DB::table('profiles')->insert($param);
        $param = [
            'user_id' => 6,
            'name' => 'テスト六郎',
            'postcode' => '1066108',
            'address' => '東京都港区六本木6-10-1'
        ];
        DB::table('profiles')->insert($param);
    }
}
