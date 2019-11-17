<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComandedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comanded', function (Blueprint $table) {

            $table->unsignedBigInteger('id_orders');
            $table->foreign('id_orders')->references('id')->on('orders')->onDelete('cascade');

            $table->unsignedBigInteger('id_articles');
            $table->foreign('id_articles')->references('id')->on('articles')->onDelete('cascade');

            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comanded');
    }
}
