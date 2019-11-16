<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillDataEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $obj = App\Event::create(['name'=>'Jeux de rôles', 'description'=>'JDR papier. 8 max', 'start_date'=>'2019-12-01', 'end_date'=>null, 'price'=>'0', 'recurrent'=>'1', 'validate'=>'1', 'id_images'=>'250', 'id_users'=>'5']);
        $obj = App\Event::create(['name'=>'Cinema', 'description'=>'On va tous ensemble voir le film de la semaine.', 'start_date'=>'2019-12-01', 'end_date'=>null, 'price'=>'15', 'recurrent'=>'0', 'validate'=>'1', 'id_images'=>'251', 'id_users'=>'106']);
        $obj = App\Event::create(['name'=>'Foot', 'description'=>'Rdv au stade.', 'start_date'=>'2019-12-01', 'end_date'=>null, 'price'=>'0', 'recurrent'=>'1', 'validate'=>'0', 'id_images'=>'252', 'id_users'=>'41']);
        $obj = App\Event::create(['name'=>'Jardinage', 'description'=>'Carottes, choux, asperges ...', 'start_date'=>'2019-12-02', 'end_date'=>null, 'price'=>'0', 'recurrent'=>'1', 'validate'=>'1', 'id_images'=>'253', 'id_users'=>'41']);
        $obj = App\Event::create(['name'=>'Rugby', 'description'=>'On a pas encore de stade.', 'start_date'=>'2019-12-05', 'end_date'=>null, 'price'=>'0', 'recurrent'=>'1', 'validate'=>'1', 'id_images'=>'254', 'id_users'=>'70']);
        $obj = App\Event::create(['name'=>'Patinoire', 'description'=>'Prenez vos patins !', 'start_date'=>'2019-12-06', 'end_date'=>null, 'price'=>'10', 'recurrent'=>'1', 'validate'=>'1', 'id_images'=>'255', 'id_users'=>'41']);
        $obj = App\Event::create(['name'=>'Sortie ski', 'description'=>'', 'start_date'=>'2019-12-02', 'end_date'=>'2019-12-04', 'price'=>'150', 'recurrent'=>'0', 'validate'=>'0', 'id_images'=>'256', 'id_users'=>'70']);
        $obj = App\Event::create(['name'=>'FabLab: création de bornes d\'arcades', 'description'=>'Venez créer des bornes d\'arcades au FabLab.', 'start_date'=>'2019-12-20', 'end_date'=>'2020-01-20', 'price'=>'0', 'recurrent'=>'1', 'validate'=>'1', 'id_images'=>'257', 'id_users'=>'5']);
        $obj = App\Event::create(['name'=>'Atelier couture', 'description'=>'Réparer vos vêtements', 'start_date'=>'2019-12-20', 'end_date'=>null, 'price'=>'1', 'recurrent'=>'1', 'validate'=>'1', 'id_images'=>'258', 'id_users'=>'106']);
        $obj = App\Event::create(['name'=>'Battle Dev', 'description'=>'Compétition de code.', 'start_date'=>'2019-12-25', 'end_date'=>null, 'price'=>'0', 'recurrent'=>'0', 'validate'=>'1', 'id_images'=>'260', 'id_users'=>'41']);
        $obj = App\Event::create(['name'=>'Nuit de l\'info', 'description'=>'Une nuit pour réaliser des projets', 'start_date'=>'2019-12-28', 'end_date'=>'2019-12-29', 'price'=>'0', 'recurrent'=>'0', 'validate'=>'0', 'id_images'=>'261', 'id_users'=>'5']);
        $obj = App\Event::create(['name'=>'Mario kart Wii', 'description'=>'Compétition de Mario Kart sur Wii', 'start_date'=>'2019-12-22', 'end_date'=>null, 'price'=>'5', 'recurrent'=>'0', 'validate'=>'1', 'id_images'=>'262', 'id_users'=>'106']);
        $obj = App\Event::create(['name'=>'Théatre', 'description'=>'Venez tous les jeudis dans la salle commune pour du théatre d\'improvisation !', 'start_date'=>'2020-01-08', 'end_date'=>null, 'price'=>'0', 'recurrent'=>'1', 'validate'=>'1', 'id_images'=>'263', 'id_users'=>'70']);
        $obj = App\Event::create(['name'=>'Ping-Pong', 'description'=>'Ping - Pong', 'start_date'=>'2020-02-01', 'end_date'=>null, 'price'=>'0', 'recurrent'=>'1', 'validate'=>'0', 'id_images'=>'264', 'id_users'=>'106']);
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
