<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblXeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_xe', function (Blueprint $table) {
            $table->increments('xe_id');
            $table->string('hang_xe');
            $table->string('giamuaxe');
            $table->string('url_hinhxe');
            $table->string('sodangky_xe', 50);
            $table->string('color')->nullable();
            $table->integer('socho_xe')->unsigned();
            $table->string('taixe_xe')->nullable();
            $table->timestamp('ngaysanxuat');
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
        Schema::drop('tbl_xe');
    }
}
