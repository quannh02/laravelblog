<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblDondatchitietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('tbl_dondatchitiet', function (Blueprint $table) {
            $table->increments('ddct_id');
            $table->integer('dondat_id')->unsigned();
            $table->integer('xe_id')->unsigned();
            $table->string('gia');
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
        Schema::drop('tbl_dondatchitiet');
    }
}
