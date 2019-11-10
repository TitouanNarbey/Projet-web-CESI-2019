<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillDataOffer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $obj = App\Offer::create(['id_articles'=>'1', 'id_campus'=>'3', 'stock'=>'22', 'price'=>'10']);
        $obj = App\Offer::create(['id_articles'=>'1', 'id_campus'=>'8', 'stock'=>'8', 'price'=>'10']);
        $obj = App\Offer::create(['id_articles'=>'1', 'id_campus'=>'14', 'stock'=>'55', 'price'=>'10']);
        $obj = App\Offer::create(['id_articles'=>'1', 'id_campus'=>'22', 'stock'=>'150', 'price'=>'10']);
        $obj = App\Offer::create(['id_articles'=>'2', 'id_campus'=>'22', 'stock'=>'45', 'price'=>'1.5']);
        $obj = App\Offer::create(['id_articles'=>'3', 'id_campus'=>'22', 'stock'=>'64', 'price'=>'2.50']);
        $obj = App\Offer::create(['id_articles'=>'4', 'id_campus'=>'22', 'stock'=>'27', 'price'=>'2']);
        $obj = App\Offer::create(['id_articles'=>'11', 'id_campus'=>'22', 'stock'=>'10', 'price'=>'135.00']);
        $obj = App\Offer::create(['id_articles'=>'19', 'id_campus'=>'22', 'stock'=>'45', 'price'=>'25.00']);
        $obj = App\Offer::create(['id_articles'=>'16', 'id_campus'=>'22', 'stock'=>'12', 'price'=>'20']);
        $obj = App\Offer::create(['id_articles'=>'16', 'id_campus'=>'3', 'stock'=>'25', 'price'=>'23']);
        $obj = App\Offer::create(['id_articles'=>'17', 'id_campus'=>'22', 'stock'=>'8', 'price'=>'15']);
        $obj = App\Offer::create(['id_articles'=>'21', 'id_campus'=>'22', 'stock'=>'35', 'price'=>'40.99']);
        $obj = App\Offer::create(['id_articles'=>'24', 'id_campus'=>'22', 'stock'=>'150', 'price'=>'18.99']);
        $obj = App\Offer::create(['id_articles'=>'5', 'id_campus'=>'22', 'stock'=>'150', 'price'=>'35']);
        $obj = App\Offer::create(['id_articles'=>'6', 'id_campus'=>'15', 'stock'=>'150', 'price'=>'35']);
        $obj = App\Offer::create(['id_articles'=>'7', 'id_campus'=>'6', 'stock'=>'147', 'price'=>'35']);
        $obj = App\Offer::create(['id_articles'=>'7', 'id_campus'=>'7', 'stock'=>'0', 'price'=>'35']);
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
