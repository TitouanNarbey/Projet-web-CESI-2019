<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIllustratearticlesmultiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('illustratearticlesmulti', function (Blueprint $table) {

            $table->unsignedBigInteger('id_images');
            $table->foreign('id_images')->references('id')->on('images');

            $table->unsignedBigInteger('id_articles');
            $table->foreign('id_articles')->references('id')->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('illustratearticlesmulti');
    }
}
