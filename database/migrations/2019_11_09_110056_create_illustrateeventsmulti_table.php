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
            
            $table->unsignedBigInteger('id_images');
            $table->foreign('id_images')->references('id')->on('images');

            $table->unsignedBigInteger('id_events');
            $table->foreign('id_events')->references('id')->on('events');

            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');
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
