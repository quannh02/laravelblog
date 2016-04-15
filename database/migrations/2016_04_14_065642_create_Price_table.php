<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id')->unsigned();
            $table->foreign('car_id')->references('id')->on('cars');
            $table->integer('priceInWeek');
            $table->integer('priceWeekend');
            $table->integer('diemdon_id')->unsigned();
            $table->foreign('diemdon_id')->references('id')->on('diadiem');
            $table->integer('diemden_id')->unsigned();
            $table->foreign('diemden_id')->references('id')->on('diadiem');
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
        Schema::drop('prices');
    }
}
