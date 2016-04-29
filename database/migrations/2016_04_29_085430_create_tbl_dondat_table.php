<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblDondatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('tbl_dondat', function (Blueprint $table) {
            $table->increments('dondat_id');
            $table->integer('nguoidung_id')->unsigned();
            $table->string('diemdon');
            $table->string('diemden');
            $table->text('yeucau')->nullable();
            $table->timestamp('ngaydi');
            $table->timestamp('ngayve');
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
        Schema::drop('tbl_dondat');
    }
}
