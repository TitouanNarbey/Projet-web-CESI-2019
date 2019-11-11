<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer', function (Blueprint $table) {
            $table->unsignedBigInteger('id_articles');
            $table->foreign('id_articles')->references('id')->on('articles');

            $table->unsignedBigInteger('id_campus');
            $table->foreign('id_campus')->references('id')->on('campus');

            $table->integer('stock');
            $table->float('price', 11, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer');
    }
}
