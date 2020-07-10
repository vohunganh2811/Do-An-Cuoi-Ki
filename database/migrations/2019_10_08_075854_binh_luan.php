<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BinhLuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function($table){
            $table->increments('id');
        
            $table->string('content');
            $table->integer('product')->unsigned();
            $table->integer('user')->unsigned();
          //  $table->foreign('masp')->reference('id')->on('sanpham');
            //$table->foreign('mathanhvien')->reference('id')->on('thanhvien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comment');
    }
}
