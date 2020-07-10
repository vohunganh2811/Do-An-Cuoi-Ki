<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('usertype')->default(1);
            $table->string('social_id')->nullable();
            $table->string('avatar')->nullable();
            $table->string('ruler')->default(0);
            $table->integer('status')->default(0);
            $table->integer('logintype');
            $table->integer('deleted');
            $table->rememberToken();
            $table->timestamps();
            
        });

        Schema::table('users', function (Blueprint $table) {
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
