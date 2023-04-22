<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            CustomersSeeder::class,
            ReservationsSeeder::class,
            RoomsSeeder::class,
            PlansSeeder::class,
            RestaurantReservationsSeeder::class,
            RestaurantsSeeder::class,
            FairsSeeder::class,
            BanquetUsersSeeder::class,
            BanquetReservationsSeeder::class,
            BanquetHallsSeeder::class,
            FacilitiesSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
