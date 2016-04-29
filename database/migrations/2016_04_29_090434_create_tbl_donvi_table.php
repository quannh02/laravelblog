<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblDonviTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tbl_donvi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_dv');
            $table->string('diachi');
            $table->string('masothue');
            $table->string('sodienthoai', 50);
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
        Schema::drop('tbl_donvi');
    }
}
