<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_types')->insert([
            [
                'room_type_name' => 'シングル',
                'room_type_catch_copy' => '静寂な空間でゆっくりと過ごせる、シングルルーム。快適なステイをお約束します。',
                'room_type_description' => '心地よい眠りをサポートするマットレスと、機能的な設備を備えたシングルルームで、快適な滞在をお約束いたします。',
                'room_type_image' => 'room_1.jpg',
                'room_size' => '15.0',
                'created_at' => Now(),
            ],
            [
                'room_type_name' => 'ツイン',
                'room_type_catch_copy' => 'ゆったりとくつろげる2つのベッドが自慢の客室。',
                'room_type_description' => '2つのベッドでゆったりとおくつろぎいただける客室です。',
                'room_type_image' => 'room_1.jpg',
                'room_size' => '24.0',
                'created_at' => Now(),
            ],
            [
                'room_type_name' => 'ダブル',
                'room_type_catch_copy' => 'くつろぎの空間を、贅沢にお届けするダブルルーム。',
                'room_type_description' => 'くつろぎと快適さを兼ね備えたダブルルームで、贅沢なひとときをお過ごしください。',
                'room_type_image' => 'room_1.jpg',
                'room_size' => '18.0',
                'created_at' => Now(),
            ],
            [
                'room_type_name' => 'トリプル',
                'room_type_catch_copy' => 'ビジネスやプライベートでの滞在に最適なトリプルルーム。くつろぎのひとときをお過ごしください。',
                'room_type_description' => '広々としたトリプルルームで快適な滞在を。シンプルで落ち着いたデザインで、ゆったりとしたくつろぎの時間をお過ごしいただけます。',
                'room_type_image' => 'room_1.jpg',
                'room_size' => '33.0',
                'created_at' => Now(),
            ],
            [
                'room_type_name' => 'クアッド',
                'room_type_catch_copy' => '家族やグループに最適な広々とした4人用客室',
                'room_type_description' => 'スタイリッシュな内装が特徴の客室。ツインベッド2台とソファベッドがあり、最大4名まで宿泊可能です。モダンな設備も充実しており、快適な滞在をお約束します。',
                'room_type_image' => 'room_1.jpg',
                'room_size' => '48.0',
                'created_at' => Now(),
            ],
        ]);
    }
}
