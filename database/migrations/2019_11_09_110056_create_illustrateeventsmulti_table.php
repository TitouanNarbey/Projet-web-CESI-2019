<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIllustrateeventsmultiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('illustrateeventsmulti', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_images');
            $table->foreign('id_images')->references('id')->on('images')->onDelete('cascade');

            $table->unsignedBigInteger('id_events');
            $table->foreign('id_events')->references('id')->on('events')->onDelete('cascade');

            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('illustrateeventsmulti');
    }
}
