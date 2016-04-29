<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblVoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_vote', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('xe_id')->unsigned();
            $table->integer('sovotes')->unsigned();
            $table->integer('tongdiem')->unsigned();
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
        Schema::drop('tbl_vote');
    }
}
