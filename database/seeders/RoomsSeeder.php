<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'room_number' => '101',
                'bed_count' => '1',
                'max_capacity' => '1',
                'bed_type' => 'シングル',
                'smoking' => '0',
                'price' => '10000',
                'image' => 'room_1.jpg',
                'room_description' => 'リッチな内装が特徴のスイートルームで、ゆったりとしたくつろぎの時間をお過ごしください。',
                'created_at' => Now(),
            ],
            [
                'room_number' => '102',
                'bed_count' => '2',
                'max_capacity' => '2',
                'bed_type' => 'ツイン',
                'smoking' => '1',
                'price' => '20000',
                'image' => 'room_2.jpg',
                'room_description' => '眺めの良い高層階のお部屋で、都会の喧騒から解放された贅沢なひとときをお楽しみください。',
                'created_at' => Now(),
            ],
            [
                'room_number' => '103',
                'bed_count' => '2',
                'max_capacity' => '4',
                'bed_type' => 'クアッド',
                'smoking' => '0',
                'price' => '35000',
                'image' => 'room_1.jpg',
                'room_description' => 'キングサイズベッドが設置されたお部屋で、優雅な時間を過ごしていただけます。',
                'created_at' => Now(),
            ],
            [
                'room_number' => '201',
                'bed_count' => '2',
                'max_capacity' => '4',
                'bed_type' => 'クアッド',
                'smoking' => '0',
                'price' => '50000',
                'image' => 'room_2.jpg',
                'room_description' => 'ダブルベッドが2台設置されたファミリールームで、家族での滞在に最適です。',
                'created_at' => Now(),
            ],
            [
                'room_number' => '202',
                'bed_count' => '2',
                'max_capacity' => '3',
                'bed_type' => 'トリプル',
                'smoking' => '0',
                'price' => '34000',
                'image' => 'room_1.jpg',
                'room_description' => 'ロイヤルスイートルームで、プライベートバルコニーからの絶景をお楽しみください。',
                'created_at' => Now(),
            ],
            [
                'room_number' => '203',
                'bed_count' => '1',
                'max_capacity' => '2',
                'bed_type' => 'ダブル',
                'smoking' => '1',
                'price' => '17000',
                'image' => 'room_2.jpg',
                'room_description' => 'アンティーク調の家具や、上質なベッドリネンなど、選りすぐりのアイテムが揃ったお部屋で、贅沢な時間をお過ごしください。',
                'created_at' => Now(),
            ],
            [
                'room_number' => '301',
                'bed_count' => '2',
                'max_capacity' => '2',
                'bed_type' => 'ツイン',
                'smoking' => '0',
                'price' => '18000',
                'image' => 'room_1.jpg',
                'room_description' => 'クラシカルな内装が特徴のお部屋で、贅沢な時間を過ごしていただけます。',
                'created_at' => Now(),
            ],
            [
                'room_number' => '302',
                'bed_count' => '1',
                'max_capacity' => '2',
                'bed_type' => 'ダブル',
                'smoking' => '0',
                'price' => '15000',
                'image' => 'room_2.jpg',
                'room_description' => '大型テレビや最新のオーディオ機器を揃えたプレミアムルームで、贅沢な音楽や映画鑑賞をお楽しみください。',
                'created_at' => Now(),
            ],
            [
                'room_number' => '303',
                'bed_count' => '1',
                'max_capacity' => '1',
                'bed_type' => 'シングル',
                'smoking' => '1',
                'price' => '8000',
                'image' => 'room_1.jpg',
                'room_description' => 'ダイニングエリアが設置されたラグジュアリースイートルームで、贅沢な食事とくつろぎの時間をお楽しみください。',
                'created_at' => Now(),
            ],
        ]);
    }
}
