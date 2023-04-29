<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipments')->insert([
            [
                'room_id' => '1',
                'equipment_name' => 'テレビ',
                'created_at' => Now(),
            ],
            [
                'room_id' => '1',
                'equipment_name' => '無料wifi',
                'created_at' => Now(),
            ],
            [
                'room_id' => '1',
                'equipment_name' => '冷蔵庫',
                'created_at' => Now(),
            ],
            [
                'room_id' => '1',
                'equipment_name' => 'ドライヤー',
                'created_at' => Now(),
            ],
            [
                'room_id' => '1',
                'equipment_name' => '目覚まし時計',
                'created_at' => Now(),
            ],
            [
                'room_id' => '2',
                'equipment_name' => 'テレビ',
                'created_at' => Now(),
            ],
            [
                'room_id' => '2',
                'equipment_name' => '無料wifi',
                'created_at' => Now(),
            ],
            [
                'room_id' => '2',
                'equipment_name' => '冷蔵庫',
                'created_at' => Now(),
            ],
            [
                'room_id' => '2',
                'equipment_name' => 'ドライヤー',
                'created_at' => Now(),
            ],
            [
                'room_id' => '2',
                'equipment_name' => '目覚まし時計',
                'created_at' => Now(),
            ],
            [
                'room_id' => '3',
                'equipment_name' => 'テレビ',
                'created_at' => Now(),
            ],
            [
                'room_id' => '3',
                'equipment_name' => '無料wifi',
                'created_at' => Now(),
            ],
            [
                'room_id' => '3',
                'equipment_name' => '冷蔵庫',
                'created_at' => Now(),
            ],
            [
                'room_id' => '3',
                'equipment_name' => 'ドライヤー',
                'created_at' => Now(),
            ],
            [
                'room_id' => '3',
                'equipment_name' => '目覚まし時計',
                'created_at' => Now(),
            ],
            [
                'room_id' => '4',
                'equipment_name' => 'テレビ',
                'created_at' => Now(),
            ],
            [
                'room_id' => '4',
                'equipment_name' => '無料wifi',
                'created_at' => Now(),
            ],
            [
                'room_id' => '4',
                'equipment_name' => '冷蔵庫',
                'created_at' => Now(),
            ],
            [
                'room_id' => '4',
                'equipment_name' => 'ドライヤー',
                'created_at' => Now(),
            ],
            [
                'room_id' => '4',
                'equipment_name' => '目覚まし時計',
                'created_at' => Now(),
            ],
            [
                'room_id' => '4',
                'equipment_name' => '携帯充電器',
                'created_at' => Now(),
            ],
            [
                'room_id' => '4',
                'equipment_name' => '金庫',
                'created_at' => Now(),
            ],
            [
                'room_id' => '4',
                'equipment_name' => '加湿空気清浄機',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'equipment_name' => 'テレビ',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'equipment_name' => '無料wifi',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'equipment_name' => '冷蔵庫',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'equipment_name' => 'ドライヤー',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'equipment_name' => '目覚まし時計',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'equipment_name' => '携帯充電器',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'equipment_name' => '金庫',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'equipment_name' => '加湿空気清浄機',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'equipment_name' => 'コーヒーメーカー',
                'created_at' => Now(),
            ],
            [
                'room_id' => '5',
                'equipment_name' => 'アイロン',
                'created_at' => Now(),
            ],
        ]);
    }
}
