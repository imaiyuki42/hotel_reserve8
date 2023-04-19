<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurant_reservations')->insert([
            [
                'user_id' => '1',
                'restaurant_id' => '1',
                'restaurant_reservation_date' => '2023-05-10',
                'restaurant_reservation_time' => '20:00',
                'restaurant_reservation_count' => '2',
                'created_at' => Now(),
            ],
            [
                'user_id' => '2',
                'restaurant_id' => '2',
                'restaurant_reservation_date' => '2023-05-18',
                'restaurant_reservation_time' => '12:00',
                'restaurant_reservation_count' => '1',
                'created_at' => Now(),
            ],
            [
                'user_id' => '3',
                'restaurant_id' => '3',
                'restaurant_reservation_date' => '2023-05-21',
                'restaurant_reservation_time' => '18:00',
                'restaurant_reservation_count' => '4',
                'created_at' => Now(),
            ],
        ]);
    }
}
