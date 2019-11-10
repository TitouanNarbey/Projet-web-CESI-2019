<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillDataCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $obj = App\Category::create(['name'=>'Sport']);
        $obj = App\Category::create(['name'=>'Pins']);
        $obj = App\Category::create(['name'=>'Bureautique']);
        $obj = App\Category::create(['name'=>'Montres']);
        $obj = App\Category::create(['name'=>'Musique']);
        $obj = App\Category::create(['name'=>'Sacs']);
        $obj = App\Category::create(['name'=>'Informatique']);
        $obj = App\Category::create(['name'=>'Accessoires voiture']);
        $obj = App\Category::create(['name'=>'Stylos']);
        $obj = App\Category::create(['name'=>'Peluches']);
        $obj = App\Category::create(['name'=>'Livres']);
        $obj = App\Category::create(['name'=>'Vêtements']);
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
