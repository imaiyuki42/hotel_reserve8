<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanquetHallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banquet_halls', function (Blueprint $table) {
            $table->id('banquet_hall_id');
            $table->string('hall_name');
            $table->integer('hall_area');
            $table->integer('tsubo_area');
            $table->integer('standing_style_fit_count');
            $table->integer('dinner_style_fit_count');
            $table->integer('buffet_style_fit_count');
            $table->integer('theater_style_fit_count');
            $table->string('banquet_image');
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
        Schema::dropIfExists('banquet_halls');
    }
}
