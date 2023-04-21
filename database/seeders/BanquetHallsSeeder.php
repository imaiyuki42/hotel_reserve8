<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanquetHallsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banquet_halls')->insert([
            [
                'hall_name' => 'グランドボールルーム ',
                'hall_area' => '1100',
                'tsubo_area' => '300',
                'standing_style_fit_count' => '1200',
                'dinner_style_fit_count' => '1000',
                'buffet_style_fit_count' => '800',
                'theater_style_fit_count' => '1500',
                'banquet_image' => 'banquet_1.jpg',
                'created_at' => Now(),
            ],
            [
                'hall_name' => 'ガーデンテラス ',
                'hall_area' => '700',
                'tsubo_area' => '200',
                'standing_style_fit_count' => '600',
                'dinner_style_fit_count' => '400',
                'buffet_style_fit_count' => '350',
                'theater_style_fit_count' => '900',
                'banquet_image' => 'banquet_1.jpg',
                'created_at' => Now(),
            ],
            [
                'hall_name' => 'シャンデリアホール ',
                'hall_area' => '200',
                'tsubo_area' => '70',
                'standing_style_fit_count' => '150',
                'dinner_style_fit_count' => '120',
                'buffet_style_fit_count' => '100',
                'theater_style_fit_count' => '270',
                'banquet_image' => 'banquet_1.jpg',
                'created_at' => Now(),
            ],
            [
                'hall_name' => 'ロイヤルルーム ',
                'hall_area' => '200',
                'tsubo_area' => '70',
                'standing_style_fit_count' => '150',
                'dinner_style_fit_count' => '120',
                'buffet_style_fit_count' => '100',
                'theater_style_fit_count' => '270',
                'banquet_image' => 'banquet_1.jpg',
                'created_at' => Now(),
            ],
            [
                'hall_name' => 'クリスタルルーム ',
                'hall_area' => '50',
                'tsubo_area' => '15',
                'standing_style_fit_count' => '25',
                'dinner_style_fit_count' => '20',
                'buffet_style_fit_count' => '20',
                'theater_style_fit_count' => '40',
                'banquet_image' => 'banquet_1.jpg',
                'created_at' => Now(),
            ],
        ]);
    }
}
