<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillDataCampus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $obj = App\Campus::create(['name'=>'Campus de Brest', 'address'=>'2 avenue de Provence', 'city'=>'29200 BREST']);
        $obj = App\Campus::create(['name'=>'Campus de Saint-Nazaire', 'address'=>'Boulevard de l’Université', 'city'=>'44603 SAINT-NAZAIRE']);
        $obj = App\Campus::create(['name'=>'Campus de Caen', 'address'=>'Campus II – ESITC Caen , 1 rue Pierre et Marie Curie', 'city'=>'14610 EPRON']);
        $obj = App\Campus::create(['name'=>'Campus de Nantes', 'address'=>'1 avenue Augustin Louis Cauchy , La Chantrerie', 'city'=>'44307 NANTES']);
        $obj = App\Campus::create(['name'=>'Campus du Mans', 'address'=>'44 avenue Frédéric Auguste Bartholdi', 'city'=>'72000 LE MANS']);
        $obj = App\Campus::create(['name'=>'Campus de Rouen (École d’Ingénieurs)', 'address'=>'14 rue Sakharov', 'city'=>'76130 MONT SAINT AIGNAN']);
        $obj = App\Campus::create(['name'=>'Campus de Rouen (École Supérieure de l’Alternance et CESI École de Formation des Managers)', 'address'=>'1 rue Guglielmo Marconi , Parc de la Vatine', 'city'=>'76130 MONT SAINT AIGNAN']);
        $obj = App\Campus::create(['name'=>'Campus d\'Arras', 'address'=>'7 rue Diderot', 'city'=>'62000 ARRAS']);
        $obj = App\Campus::create(['name'=>'Campus de Lille (École d’Ingénieurs)', 'address'=>'Campus Arts et Métiers , 8 Bd Louis XIV', 'city'=>'59777 EURALILLE']);
        $obj = App\Campus::create(['name'=>'Campus de Lille (École Supérieure de l’Alternance et CESI École de Formation des Managers)', 'address'=>'Campus SKEMA , Avenue Willy Brandt', 'city'=>'59000 Lille']);
        $obj = App\Campus::create(['name'=>'Campus de La Rochelle', 'address'=>'Bâtiment Lab In’Tech , 8 rue Isabelle Autissier', 'city'=>'17140 LAGORD']);
        $obj = App\Campus::create(['name'=>'Campus d\'Angoulême', 'address'=>'Pôle d’excellence , 40 route de la Croix du Milieu', 'city'=>'16400 LA COURONNE']);
        $obj = App\Campus::create(['name'=>'Campus de Châteauroux', 'address'=>'', 'city'=>'']);
        $obj = App\Campus::create(['name'=>'Campus d\'Orléans', 'address'=>'1 allée du Titane', 'city'=>'45100 ORLEANS']);
        $obj = App\Campus::create(['name'=>'Campus de Paris Nanterre', 'address'=>'93 boulevard de La Seine , CS 40177', 'city'=>'92023 NANTERRE CEDEX']);
        $obj = App\Campus::create(['name'=>'Campus de Reims', 'address'=>'7 bis avenue Robert Schuman', 'city'=>'51100 REIMS']);
        $obj = App\Campus::create(['name'=>'Campus de Nancy (École d’Ingénieurs)', 'address'=>'2 bis rue de Crédence', 'city'=>'54600 VILLERS LES NANCY']);
        $obj = App\Campus::create(['name'=>'Campus de Nancy (École d’Ingénieurs spécialité Informatique)', 'address'=>'14-16 Allée de la Forêt de la Reine', 'city'=>'54500 VANDOEUVRE LES NANCY']);
        $obj = App\Campus::create(['name'=>'Campus de Nancy (École Supérieure de l’Alternance et CESI École de Formation des Managers)', 'address'=>'3 rue du Bois de la Champelle', 'city'=>'54500 VANDOEUVRE LES NANCY']);
        $obj = App\Campus::create(['name'=>'Campus de Strasbourg', 'address'=>'Parc des Tanneries , BP 50016', 'city'=>'67380 LINGOLSHEIM']);
        $obj = App\Campus::create(['name'=>'Campus de Dijon', 'address'=>'22 B rue du Cap Vert', 'city'=>'21800 QUETIGNY']);
        $obj = App\Campus::create(['name'=>'Campus de Lyon', 'address'=>'19 avenue Guy de Collongue', 'city'=>'69134 ECULLY CEDEX']);
        $obj = App\Campus::create(['name'=>'Campus de Grenoble', 'address'=>'7 chemin du vieux chêne , Inovallée', 'city'=>'38240 MEYLAN']);
        $obj = App\Campus::create(['name'=>'Campus de Pau (Pau)', 'address'=>'8 rue des Frères d’Orbigny', 'city'=>'64 000 PAU']);
        $obj = App\Campus::create(['name'=>'Campus de Pau (Assat)', 'address'=>'Pôle Aéropolis , 1 Cours de l’industrie', 'city'=>'64510 ASSAT']);
        $obj = App\Campus::create(['name'=>'Campus de Toulouse', 'address'=>'16 rue Magellan', 'city'=>'31670 LABEGE']);
        $obj = App\Campus::create(['name'=>'Campus de Montpellier', 'address'=>'Immeuble Le Quatrième , Zone Aéroportuaire de Montpellier Méditerranée', 'city'=>'34130 MAUGUIO']);
        $obj = App\Campus::create(['name'=>'Campus d\'Aix-en-Provence', 'address'=>'Europôle de l’Arbois , Pavillon Martel BP 30', 'city'=>'13545 AIX-EN-PROVENCE CEDEX 04']);
        $obj = App\Campus::create(['name'=>'Campus de Nice', 'address'=>'1240 route des Dolines , Buropolis 1 – 1er étage', 'city'=>'06560 SOPHIA-ANTIPOLIS']);
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
