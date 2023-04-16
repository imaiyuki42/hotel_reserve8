<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '田中一郎',
                'phone_number' => '08012345678',
                'email' => 'tanaka@gmail.com',
                'password' => Hash::make('tanaka123'),
                'created_at' => Now(),
            ],
            [
                'name' => '鈴木次郎',
                'phone_number' => '08011112222',
                'email' => 'suzuki@gmail.com',
                'password' => Hash::make('suzuki456'),
                'created_at' => Now(),
            ],
            [
                'name' => '佐藤三郎',
                'phone_number' => '08012341234',
                'email' => 'satou@gmail.com',
                'password' => Hash::make('satou789'),
                'created_at' => Now(),
            ],
        ]);
    }
}
