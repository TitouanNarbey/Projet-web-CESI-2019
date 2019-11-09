<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalisationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localisation', function (Blueprint $table) {

            $table->unsignedBigInteger('id_events');
            $table->foreign('id_events')->references('id')->on('events');

            $table->unsignedBigInteger('id_campus');
            $table->foreign('id_campus')->references('id')->on('campus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('localisation');
    }
}
