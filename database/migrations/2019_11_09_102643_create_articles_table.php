<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('description', 2047);

            $table->unsignedBigInteger('id_category');
            $table->foreign('id_category')->references('id')->on('category');

            $table->unsignedBigInteger('id_images');
            $table->foreign('id_images')->references('id')->on('images');

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
        Schema::dropIfExists('articles');
    }
}
