<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'customer_name' => '田中一郎',
                'phone_number' => '08012345678',
                'email' => 'tanaka@gmail.com',
                'password' => Hash::make('tanaka123'),
                'created_at' => Now(),
            ],
            [
                'customer_name' => '鈴木次郎',
                'phone_number' => '08011112222',
                'email' => 'suzuki@gmail.com',
                'password' => Hash::make('suzuki456'),
                'created_at' => Now(),
            ],
            [
                'customer_name' => '佐藤三郎',
                'phone_number' => '08012341234',
                'email' => 'satou@gmail.com',
                'password' => Hash::make('satou789'),
                'created_at' => Now(),
            ],
        ]);
    }
}
