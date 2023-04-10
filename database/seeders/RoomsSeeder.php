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
                'bed_number' => '1',
                'max_count' => '1',
                'smoking' => '0',
                'created_at' => Now(),
            ],
            [
                'room_number' => '201',
                'bed_number' => '2',
                'max_count' => '2',
                'smoking' => '1',
                'created_at' => Now(),
            ],
            [
                'room_number' => '301',
                'bed_number' => '4',
                'max_count' => '4',
                'smoking' => '0',
                'created_at' => Now(),
            ],
        ]);
    }
}
