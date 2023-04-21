<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanquetReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banquet_reservations', function (Blueprint $table) {
            $table->id('banquet_reservation_id');
            $table->integer('banquet_hall_id');
            $table->integer('banquet_user_id');
            $table->date('banquet_reservation_date');
            $table->time('banquet_reservation_time');
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
        Schema::dropIfExists('banquet_reservations');
    }
}
