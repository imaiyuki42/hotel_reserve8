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
                'user_id' => '1',
                'room_id' => '1',
                'plan_id' => '1',
                'checkin_date' => '2023-05-10',
                'checkout_date' => '2023-05-11',
                'number_of_guests' => '1',
                'room_use_number' => '1',
                'room_number' => '101',
                'created_at' => Now(),
            ],
            [
                'user_id' => '2',
                'room_id' => '2',
                'plan_id' => '2',
                'checkin_date' => '2023-05-15',
                'checkout_date' => '2023-05-17',
                'number_of_guests' => '4',
                'room_use_number' => '2',
                'room_number' => '201',
                'created_at' => Now(),
            ],
            [
                'user_id' => '3',
                'room_id' => '3',
                'plan_id' => '3',
                'checkin_date' => '2023-05-10',
                'checkout_date' => '2023-05-12',
                'number_of_guests' => '4',
                'room_use_number' => '2',
                'room_number' => '103',
                'created_at' => Now(),
            ],
            [
                'user_id' => '4',
                'room_id' => '4',
                'plan_id' => '4',
                'checkin_date' => '2023-05-13',
                'checkout_date' => '2023-05-17',
                'number_of_guests' => '2',
                'room_use_number' => '1',
                'room_number' => '301',
                'created_at' => Now(),
            ],
            [
                'user_id' => '5',
                'room_id' => '5',
                'plan_id' => '5',
                'checkin_date' => '2023-05-10',
                'checkout_date' => '2023-05-21',
                'number_of_guests' => '1',
                'room_use_number' => '1',
                'room_number' => '303',
                'created_at' => Now(),
            ],
        ]);
    }
}
