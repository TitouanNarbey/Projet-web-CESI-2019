<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillDataBestarticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $obj = App\BestArticle::create(['id_articles'=>'15']);
        $obj = App\BestArticle::create(['id_articles'=>'1']);
        $obj = App\BestArticle::create(['id_articles'=>'11']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
