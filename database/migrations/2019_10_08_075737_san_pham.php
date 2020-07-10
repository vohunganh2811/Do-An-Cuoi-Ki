<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function($table){
            $table->increments('id');
            $table->string('name');
            $table->integer('price')->unsigned();
            $table->integer('saleprice')->unsigned();
            $table->string('configuration');
            $table->string('description');
            $table->string('description1');
            $table->string('description2');
            $table->string('description3');
            $table->string('image');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->integer('new');
            $table->integer('quantityexists');
            $table->integer('producttype')->unsigned();
            $table->integer('producer')->unsigned();
            $table->integer('deleted');
           // $table->foreign('loaisp')->reference('id')->on('loaisanpham');
            //$table->foreign('mansx')->reference('id')->on('nhasanxuat');
        });

       
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('product');
    }
}
