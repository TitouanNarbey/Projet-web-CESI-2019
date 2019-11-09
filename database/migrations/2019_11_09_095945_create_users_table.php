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
            $table->string('last_name', 50);
            $table->string('first_name', 50);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->timestamps();

            $table->unsignedBigInteger('id_campus');
            $table->foreign('id_campus')->references('id')->on('campus');

            $table->unsignedBigInteger('id_roles');
            $table->foreign('id_roles')->references('id')->on('roles');

            $table->unsignedBigInteger('id_images');
            $table->foreign('id_images')->references('id')->on('images');
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
