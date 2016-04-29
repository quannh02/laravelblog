<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblNguoidungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_nguoidung', function (Blueprint $table) {
            $table->increments('nguoidung_id');
            $table->string('tendaydu');
            $table->string('email')->unique();
            $table->string('gioitinh');
            $table->string('diachi');
            $table->string('sodienthoai');
            $table->string('tencongty')->nullable();
            $table->string('masothue')->nullable();
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
        Schema::drop('tbl_nguoidung');
    }
}
