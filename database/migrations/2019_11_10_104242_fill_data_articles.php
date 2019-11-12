<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillDataArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $obj = App\Article::create(['name'=>'Tasse bambou', 'description'=>'Une tasse écolo', 'id_category'=>'3', 'id_images'=>'200', 'id_campus'=>'22', 'stock'=>'150', 'price'=>'10']);
        $obj = App\Article::create(['name'=>'Stylo CESI Bleu', 'description'=>'Un simple stylo noir', 'id_category'=>'3', 'id_images'=>'201', 'id_campus'=>'22', 'stock'=>'45', 'price'=>'1.5']);
        $obj = App\Article::create(['name'=>'Stylo CESI Blanc', 'description'=>'Un simple stylo noir', 'id_category'=>'3', 'id_images'=>'203', 'id_campus'=>'22', 'stock'=>'64', 'price'=>'2.50']);
        $obj = App\Article::create(['name'=>'Stylo CESI Rouge', 'description'=>'Un simple stylo noir', 'id_category'=>'3', 'id_images'=>'202', 'id_campus'=>'22', 'stock'=>'27', 'price'=>'2']);
        $obj = App\Article::create(['name'=>'Sweat BDE-Lyon', 'description'=>'Le sweat officiel du BDE Lyon', 'id_category'=>'12', 'id_images'=>'204', 'id_campus'=>'22', 'stock'=>'150', 'price'=>'35']);
        $obj = App\Article::create(['name'=>'Sweat BDE-Paris', 'description'=>'Le sweat officiel du BDE Paris', 'id_category'=>'12', 'id_images'=>'205', 'id_campus'=>'15', 'stock'=>'150', 'price'=>'35']);
        $obj = App\Article::create(['name'=>'Sweat BDE-Rouen', 'description'=>'Le sweat officiel du BDE Rouen', 'id_category'=>'12', 'id_images'=>'206', 'id_campus'=>'22', 'stock'=>'147', 'price'=>'35']);
        $obj = App\Article::create(['name'=>'Sweat CESI', 'description'=>'Le sweat officiel du CESI', 'id_category'=>'12', 'id_images'=>'207', 'id_campus'=>'22', 'stock'=>'50', 'price'=>'10.99']);
        $obj = App\Article::create(['name'=>'Cable HDMI', 'description'=>'Cable HDMI mâle-mâle d\'une longueur de 2 mètres.', 'id_category'=>'7', 'id_images'=>'208', 'id_campus'=>'22', 'stock'=>'50', 'price'=>'10.99']);
        $obj = App\Article::create(['name'=>'Cable VGA', 'description'=>'Cable VGA mâle-mâle d\'une longueur de 1.5 mètres.', 'id_category'=>'7', 'id_images'=>'209', 'id_campus'=>'22', 'stock'=>'50', 'price'=>'10.99']);
        $obj = App\Article::create(['name'=>'Montre', 'description'=>'Superbe montre en acier', 'id_category'=>'4', 'id_images'=>'210', 'id_campus'=>'22', 'stock'=>'10', 'price'=>'135.00']);
        $obj = App\Article::create(['name'=>'Montre', 'description'=>'Superbe montre en bois', 'id_category'=>'4', 'id_images'=>'211', 'id_campus'=>'22', 'stock'=>'50', 'price'=>'10.99']);
        $obj = App\Article::create(['name'=>'Stickers voiture géant', 'description'=>'Un stickers pouvant arborer le capot de votre voiture', 'id_category'=>'8', 'id_images'=>'212', 'id_campus'=>'22', 'stock'=>'50', 'price'=>'10.99']);
        $obj = App\Article::create(['name'=>'HTML 5 et CSS 3', 'description'=>'Apprendre les bases du web', 'id_category'=>'11', 'id_images'=>'213', 'id_campus'=>'22', 'stock'=>'50', 'price'=>'10.99']);
        $obj = App\Article::create(['name'=>'PHP en 3 heures', 'description'=>'Apprendre les bases du php', 'id_category'=>'11', 'id_images'=>'214', 'id_campus'=>'22', 'stock'=>'50', 'price'=>'10.99']);
        $obj = App\Article::create(['name'=>'Laravel pour les pros', 'description'=>'Apprendre les bases de Laravel', 'id_category'=>'11', 'id_images'=>'215', 'id_campus'=>'3', 'stock'=>'25', 'price'=>'23']);
        $obj = App\Article::create(['name'=>'Arduino Uno', 'description'=>'Une carte programmable Arduino Uno. Tension : 5V', 'id_category'=>'7', 'id_images'=>'216', 'id_campus'=>'22', 'stock'=>'8', 'price'=>'15']);
        $obj = App\Article::create(['name'=>'Raspberry Pi 3b+ + boitier', 'description'=>'Une carte Raspberry Pi 3b+ avec son boitier. Idéal pour monter votre serveur.', 'id_category'=>'7', 'id_images'=>'217', 'id_campus'=>'22', 'stock'=>'50', 'price'=>'10.99']);
        $obj = App\Article::create(['name'=>'T-shirt CESI\'sport', 'description'=>'T-shirt à l\'effigie de l\'équipe de l\'école', 'id_category'=>'12', 'id_images'=>'218', 'id_campus'=>'22', 'stock'=>'45', 'price'=>'25.00']);
        $obj = App\Article::create(['name'=>'Chaise en bois', 'description'=>'Une chaise', 'id_category'=>'3', 'id_images'=>'219', 'id_campus'=>'22', 'stock'=>'50', 'price'=>'10.99']);
        $obj = App\Article::create(['name'=>'Sac de cours CESI', 'description'=>'Idéal pour allez en cours !', 'id_category'=>'6', 'id_images'=>'220', 'id_campus'=>'22', 'stock'=>'35', 'price'=>'40.99']);
        $obj = App\Article::create(['name'=>'Chaussure de ville', 'description'=>'Une paire de chaussure pour la ville', 'id_category'=>'12', 'id_images'=>'221', 'id_campus'=>'22', 'stock'=>'50', 'price'=>'10.99']);
        $obj = App\Article::create(['name'=>'Chaussure de sport', 'description'=>'Une paire de chaussure pour le sport', 'id_category'=>'1', 'id_images'=>'222', 'id_campus'=>'22', 'stock'=>'50', 'price'=>'10.99']);
        $obj = App\Article::create(['name'=>'Ballon de foot', 'description'=>'Pour faire du sport.', 'id_category'=>'1', 'id_images'=>'223', 'id_campus'=>'22', 'stock'=>'150', 'price'=>'18.99']);
        $obj = App\Article::create(['name'=>'Ballon de rugby', 'description'=>'Pour faire du sport.', 'id_category'=>'1', 'id_images'=>'224', 'id_campus'=>'22', 'stock'=>'50', 'price'=>'10.99']);
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
