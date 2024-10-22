<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdministratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'email' => 'administrator1@example.com',
            'password' => Hash::make('administrator'),
        ];
        DB::table('administrators')->insert($param);
        $param = [
            'email' => 'administrator2@example.com',
            'password' => Hash::make('administrator'),
        ];
        DB::table('administrators')->insert($param);
    }
}
