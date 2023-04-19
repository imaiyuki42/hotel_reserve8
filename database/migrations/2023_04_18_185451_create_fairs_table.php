<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fairs', function (Blueprint $table) {
            $table->id('fair_id');
            $table->integer('restaurant_id');
            $table->string('fair_name');
            $table->date('fair_start_date');
            $table->date('fair_end_date');
            $table->integer('fair_price_lunch');
            $table->integer('fair_price_dinner');
            $table->string('fair_description');
            $table->string('fair_image');
            $table->char('recommended_flag', 1);
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
        Schema::dropIfExists('fairs');
    }
}
