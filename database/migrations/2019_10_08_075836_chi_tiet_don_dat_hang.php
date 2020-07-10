<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChiTietDonDatHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetail', function($table){
            $table->increments('id');
            $table->integer('orderid')->unsigned();;
            $table->integer('productid')->unsigned();
            $table->string('productname');
            $table->integer('count');
            $table->integer('price');
            //$table->foreign('madondathang')->reference('id')->on('dondat');
           // $table->foreign('masp')->reference('id')->on('sanpham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orderdetail');
    }
}
