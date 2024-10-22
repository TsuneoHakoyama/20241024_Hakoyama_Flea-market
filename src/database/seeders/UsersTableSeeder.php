<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'email' => 'test1@example.com',
            'password' => Hash::make('password'),
        ];
        DB::table('users')->insert($param);
        $param = [
            'email' => 'test2@example.com',
            'password' => Hash::make('password'),
        ];
        DB::table('users')->insert($param);
        $param = [
            'email' => 'test3@example.com',
            'password' => Hash::make('password'),
        ];
        DB::table('users')->insert($param);
        $param = [
            'email' => 'test4@example.com',
            'password' => Hash::make('password'),
        ];
        DB::table('users')->insert($param);
        $param = [
            'email' => 'test5@example.com',
            'password' => Hash::make('password'),
        ];
        DB::table('users')->insert($param);
        $param = [
            'email' => 'test6@example.com',
            'password' => Hash::make('password'),
        ];
        DB::table('users')->insert($param);
    }
}
