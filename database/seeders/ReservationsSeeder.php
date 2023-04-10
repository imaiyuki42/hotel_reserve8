<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            [
                'customer_id' => '1',
                'checkin_date' => '2023-04-10',
                'checkout_date' => '2023-04-11',
                'adult_use_count' => '1',
                'room_use_number' => '1',
                'created_at' => Now(),
            ],
            [
                'customer_id' => '2',
                'checkin_date' => '2023-03-10',
                'checkout_date' => '2023-03-11',
                'adult_use_count' => '2',
                'room_use_number' => '2',
                'created_at' => Now(),
            ],
            [
                'customer_id' => '3',
                'checkin_date' => '2023-02-10',
                'checkout_date' => '2023-02-11',
                'adult_use_count' => '4',
                'room_use_number' => '2',
                'created_at' => Now(),
            ],
        ]);
    }
}
