<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_type_id')->unsigned();
            $table->foreign('car_type_id')->references('id')->on('car_types');
            $table->integer('price_id')->unsigned();
            $table->string('image');
            $table->string('registration_number', 50);
            $table->string('color');
            $table->timestamp('NgaySX');
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
        Schema::drop('cars');
    }
}
