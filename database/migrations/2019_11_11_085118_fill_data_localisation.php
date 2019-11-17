<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillDataLocalisation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $obj = App\ConnexionLocalisation::create(['id_events'=>'1', 'id_campus'=>'22']);
        $obj = App\ConnexionLocalisation::create(['id_events'=>'2', 'id_campus'=>'22']);
        $obj = App\ConnexionLocalisation::create(['id_events'=>'3', 'id_campus'=>'22']);
        $obj = App\ConnexionLocalisation::create(['id_events'=>'4', 'id_campus'=>'22']);
        $obj = App\ConnexionLocalisation::create(['id_events'=>'5', 'id_campus'=>'22']);
        $obj = App\ConnexionLocalisation::create(['id_events'=>'6', 'id_campus'=>'22']);
        $obj = App\ConnexionLocalisation::create(['id_events'=>'7', 'id_campus'=>'3']);
        $obj = App\ConnexionLocalisation::create(['id_events'=>'7', 'id_campus'=>'22']);
        $obj = App\ConnexionLocalisation::create(['id_events'=>'8', 'id_campus'=>'3']);
        $obj = App\ConnexionLocalisation::create(['id_events'=>'8', 'id_campus'=>'22']);
        $obj = App\ConnexionLocalisation::create(['id_events'=>'9', 'id_campus'=>'22']);
        $obj = App\ConnexionLocalisation::create(['id_events'=>'10', 'id_campus'=>'22']);
        $obj = App\ConnexionLocalisation::create(['id_events'=>'10', 'id_campus'=>'22']);
        $obj = App\ConnexionLocalisation::create(['id_events'=>'11', 'id_campus'=>'22']);
        $obj = App\ConnexionLocalisation::create(['id_events'=>'12', 'id_campus'=>'22']);
        $obj = App\ConnexionLocalisation::create(['id_events'=>'13', 'id_campus'=>'22']);
        $obj = App\ConnexionLocalisation::create(['id_events'=>'14', 'id_campus'=>'22']);
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
