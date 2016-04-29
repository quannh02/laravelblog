<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->boolean('customer_type');
            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('customer_address');
            $table->string('soDienThoai');
            $table->string('tenCongTy');
            $table->string('maSoThue');
            $table->string('password', 60);
            $table->boolean('terms');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
