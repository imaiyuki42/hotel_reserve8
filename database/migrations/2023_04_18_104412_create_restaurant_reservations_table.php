<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_reservations', function (Blueprint $table) {
            $table->id('restaurant_reservation_id');
            $table->integer('user_id');
            $table->integer('restaurant_id');
            $table->date('restaurant_reservation_date');
            $table->time('restaurant_reservation_time');
            $table->integer('restaurant_reservation_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant_reservations');
    }
}
