<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('amenities')->insert([
            [
                'room_id' => '1',
                'amenity_name' => 'ナイトウェア',
                'created_at' => Now(),
            ],
            [
                'room_id' => '1',
                'amenity_name' => 'バスタオル',
                'created_at' => Now(),
            ],
            [
                'room_id' => '1',
                'amenity_name' => 'フェイスタオル',
                'created_at' => Now(),
            ],
            [
                'room_id' => '1',
                'amenity_name' => '歯ブラシ',
                'created_at' => Now(),
            ],
            [
                'room_id' => '1',
                'amenity_name' => 'カミソリ',
                'created_at' => Now(),
            ],
            [
                'room_id' => '2',
                'amenity_name' => 'ナイトウェア',
                'created_at' => Now(),
            ],
            [
                'room_id' => '2',
                'amenity_name' => 'バスタオル',
                'created_at' => Now(),
            ],
            [
                'room_id' => '2',
                'amenity_name' => 'フェイスタオル',
                'created_at' => Now(),
            ],
            [
                'room_id' => '2',
                'amenity_name' => '歯ブラシ',
                'created_at' => Now(),
            ],
            [
                'room_id' => '2',
                'amenity_name' => 'カミソリ',
                'created_at' => Now(),
            ],
            [
                'room_id' => '3',
                'amenity_name' => 'ナイトウェア',
                'created_at' => Now(),
            ],
            [
                'room_id' => '3',
                'amenity_name' => 'バスタオル',
                'created_at' => Now(),
            ],
            [
                'room_id' => '3',
                'amenity_name' => 'フェイスタオル',
                'created_at' => Now(),
            ],
            [
                'room_id' => '3',
                'amenity_name' => '歯ブラシ',
                'created_at' => Now(),
            ],
            [
                'room_id' => '3',
                'amenity_name' => 'カミソリ',
                'created_at' => Now(),
            ],
            [
                'room_id' => '4',
                'amenity_name' => 'ナイトウェア',
                'created_at' => Now(),
            ],
            [
                'room_id' => '4',
                'amenity_name' => 'バスタオル',
                'created_at' => Now(),
            ],
            [
                'room_id' => '4',
                'amenity_name' => 'フェイスタオル',
                'created_at' => Now(),
            ],
            [
                'room_id' => '4',
                'amenity_name' => '歯ブラシ',
                'created_at' => Now(),
            ],
            [
                'room_id' => '4',
                'amenity_name' => 'カミソリ',
                'created_at' => Now(),
            ],
            [
                'room_id' => '4',
                'amenity_name' => '無料ミネラルウォーター',
                'created_at' => Now(),
            ],
            [
                'room_id' => '4',
                'amenity_name' => 'ドリップコーヒー',
                'created_at' => Now(),
            ],
            [
                'room_id' => '4',
                'amenity_name' => '紅茶',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'amenity_name' => 'ナイトウェア',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'amenity_name' => 'バスタオル',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'amenity_name' => 'フェイスタオル',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'amenity_name' => '歯ブラシ',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'amenity_name' => 'カミソリ',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'amenity_name' => '無料ミネラルウォーター',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'amenity_name' => 'ドリップコーヒー',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'amenity_name' => '紅茶',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'amenity_name' => 'ウォッシュクロス',
                'created_at' => Now(),
            ],
        ]);
    }
}
