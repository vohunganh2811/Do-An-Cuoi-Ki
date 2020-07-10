<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KhachHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function($table){
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->integer('user')->unsigned();
            $table->integer('deleted')->unsigned();
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
        Schema::drop('customer');
    }
}
