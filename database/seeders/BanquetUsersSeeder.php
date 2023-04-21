<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanquetUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banquet_users')->insert([
            [
                'banquet_reserver_name' => '佐藤太郎',
                'phone_number' => '07012345678',
                'email' => 'taro@gmail.com',
                'created_at' => Now(),
            ],
            [
                'banquet_reserver_name' => '田中花子',
                'phone_number' => '07011112222',
                'email' => 'hanako@gmail.com',
                'created_at' => Now(),
            ],
            [
                'banquet_reserver_name' => '山本健司',
                'phone_number' => '07012341234',
                'email' => 'kenji@gmail.com',
                'created_at' => Now(),
            ],
        ]);
    }
}
