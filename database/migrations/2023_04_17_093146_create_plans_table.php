<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id('plan_id');
            $table->string('plan_name');
            $table->text('plan_catch_copy');
            $table->text('plan_description');
            $table->integer('plan_price');
            $table->string('plan_image');
            $table->time('checkin_time');
            $table->time('checkout_time');
            $table->char('meal', 1);
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
        Schema::dropIfExists('plans');
    }
}
