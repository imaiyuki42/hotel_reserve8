<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanquetReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banquet_reservations')->insert([
            [
                'banquet_hall_id' => '1',
                'banquet_user_id' => '1',
                'banquet_reservation_date' => '2023-05-10',
                'banquet_reservation_time' => '11:00',
                'created_at' => Now(),
            ],
            [
                'banquet_hall_id' => '2',
                'banquet_user_id' => '2',
                'banquet_reservation_date' => '2023-05-18',
                'banquet_reservation_time' => '12:00',
                'created_at' => Now(),
            ],
            [
                'banquet_hall_id' => '3',
                'banquet_user_id' => '3',
                'banquet_reservation_date' => '2023-05-21',
                'banquet_reservation_time' => '18:00',
                'created_at' => Now(),
            ],
            [
                'banquet_hall_id' => '4',
                'banquet_user_id' => '4',
                'banquet_reservation_date' => '2023-05-03',
                'banquet_reservation_time' => '17:00',
                'created_at' => Now(),
            ],
            [
                'banquet_hall_id' => '5',
                'banquet_user_id' => '5',
                'banquet_reservation_date' => '2023-05-10',
                'banquet_reservation_time' => '19:00',
                'created_at' => Now(),
            ],
        ]);
    }
}
