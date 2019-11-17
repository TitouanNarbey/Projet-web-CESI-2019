<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('description', 2047);
            $table->date('start_date');
            $table->date('end_date')->nullable($value = true);
            $table->float('price', 11, 2);
            $table->boolean('recurrent');
            $table->boolean('validate');

            $table->unsignedBigInteger('id_images');
            $table->foreign('id_images')->references('id')->on('images')->onDelete('cascade');

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
        Schema::dropIfExists('events');
    }
}
