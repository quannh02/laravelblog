<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgencyAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('agency_address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address', 255);
            $table->string('maSoThue', 50);
            $table->smallInteger('agency_Id');
            $table->string('soDienThoai', 25);
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
        Schema::drop('agency_address');
    }
}
