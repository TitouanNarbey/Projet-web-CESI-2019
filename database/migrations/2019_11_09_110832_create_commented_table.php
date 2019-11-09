<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commented', function (Blueprint $table) {

            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');

            $table->unsignedBigInteger('id_images');
            $table->foreign('id_images')->references('id')->on('images');

            $table->string('text', 2047);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commented');
    }
}
