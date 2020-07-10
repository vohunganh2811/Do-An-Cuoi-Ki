<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DonDatHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function($table){
            $table->increments('id');
            $table->dateTime('orderdate');
            $table->integer('delivered');
            $table->dateTime('deliverydate');
            $table->integer('paid');
            $table->integer('customerid')->unsigned();
            $table->integer('deleted')->unsigned();
           // $table->foreign('makh')->reference('id')->on('khachhang');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order');
    }
}
