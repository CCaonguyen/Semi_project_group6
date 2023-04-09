<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $users) {
            $users->string('username') ->unique();
            $users->string('fullname');
            $users->string('password');
            $users->string('email') ->unique();
            $users->string('phonenumber');
            $users->string('address');
            $users->string('city');
            $users->integer('role') ->unsigned();
            // $users->foreign('roleid')->references('roleid')->on('role');
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
    }
}
