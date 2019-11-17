<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillDataUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //$obj = App\User::create(['last_name'=>'', 'first_name'=>'', 'email'=>'', 'password'=>bcrypt(''), 'id_campus'=>'', 'id_roles'=>'', 'id_images'=>'']);
        $obj = App\User::create(['last_name'=>'Martin', 'first_name'=>'Steve', 'email'=>'aaa.artin@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Bernard', 'first_name'=>'Steve', 'email'=>'aaa.ernard@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Thomas', 'first_name'=>'Steve', 'email'=>'aaa.homas@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Petit', 'first_name'=>'Steve', 'email'=>'aaa.etit@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Robert', 'first_name'=>'Steve', 'email'=>'aaa.obert@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'2', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Richard', 'first_name'=>'Steve', 'email'=>'aaa.ichard@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Durand', 'first_name'=>'Steve', 'email'=>'aaa.urand@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Dubois', 'first_name'=>'Steve', 'email'=>'aaa.ubois@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Moreau', 'first_name'=>'Steve', 'email'=>'aaa.oreau@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Laurent', 'first_name'=>'Steve', 'email'=>'aaa.aurent@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Simon', 'first_name'=>'Steve', 'email'=>'aaa.imon@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Michel', 'first_name'=>'Steve', 'email'=>'aaa.ichel@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Lefebvre', 'first_name'=>'Steve', 'email'=>'aaa.efebvre@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Leeroy', 'first_name'=>'Jenkins', 'email'=>'Jenkins.leeroy@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Roux', 'first_name'=>'Steve', 'email'=>'aaa.oux@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'David', 'first_name'=>'Steve', 'email'=>'aaa.avid@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Bertrand', 'first_name'=>'Steve', 'email'=>'aaa.ertrand@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Morel', 'first_name'=>'Steve', 'email'=>'bbb.orel@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Fournier', 'first_name'=>'Steve', 'email'=>'bbb.ournier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'3', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Girard', 'first_name'=>'Steve', 'email'=>'bbb.irard@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'3', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Bonnet', 'first_name'=>'Steve', 'email'=>'bbb.onnet@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Dupont', 'first_name'=>'Steve', 'email'=>'bbb.upont@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'3', 'id_roles'=>'2', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Lambert', 'first_name'=>'Steve', 'email'=>'bbb.ambert@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'3', 'id_roles'=>'2', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Fontaine', 'first_name'=>'Steve', 'email'=>'bbb.ontaine@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'3', 'id_roles'=>'3', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Rousseau', 'first_name'=>'Steve', 'email'=>'bbb.ousseau@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Vincent', 'first_name'=>'Steve', 'email'=>'bbb.incent@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Muller', 'first_name'=>'Steve', 'email'=>'bbb.uller@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Lefevre', 'first_name'=>'Steve', 'email'=>'bbb.efevre@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Faure', 'first_name'=>'Steve', 'email'=>'bbb.aure@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Andre', 'first_name'=>'Steve', 'email'=>'bbb.ndre@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Mercier', 'first_name'=>'Steve', 'email'=>'bbb.ercier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Blanc', 'first_name'=>'Steve', 'email'=>'bbb.lanc@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Guerin', 'first_name'=>'Steve', 'email'=>'bbb.uerin@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Boyer', 'first_name'=>'Steve', 'email'=>'bbb.oyer@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Garnier', 'first_name'=>'Steve', 'email'=>'bbb.arnier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Chevalier', 'first_name'=>'Steve', 'email'=>'bbb.hevalier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Francois', 'first_name'=>'Steve', 'email'=>'bbb.rancois@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Legrand', 'first_name'=>'Steve', 'email'=>'bbb.egrand@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Gauthier', 'first_name'=>'Steve', 'email'=>'bbb.authier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Garcia', 'first_name'=>'Steve', 'email'=>'bbb.arcia@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Perrin', 'first_name'=>'Steve', 'email'=>'bbb.errin@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'2', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Robin', 'first_name'=>'Steve', 'email'=>'bbb.obin@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Clement', 'first_name'=>'Steve', 'email'=>'bbb.lement@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Morin', 'first_name'=>'Steve', 'email'=>'bbb.orin@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Nicolas', 'first_name'=>'Steve', 'email'=>'bbb.icolas@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Henry', 'first_name'=>'Steve', 'email'=>'bbb.enry@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Roussel', 'first_name'=>'Steve', 'email'=>'bbb.oussel@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'3', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Mathieu', 'first_name'=>'Steve', 'email'=>'bbb.athieu@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Gautier', 'first_name'=>'Steve', 'email'=>'bbb.autier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Masson', 'first_name'=>'Steve', 'email'=>'bbb.asson@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Marchand', 'first_name'=>'Steve', 'email'=>'bbb.archand@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Duval', 'first_name'=>'Steve', 'email'=>'bbb.uval@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Denis', 'first_name'=>'Steve', 'email'=>'bbb.enis@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Dumont', 'first_name'=>'Steve', 'email'=>'bbb.umont@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'8', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Marie', 'first_name'=>'Steve', 'email'=>'bbb.arie@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Lemaire', 'first_name'=>'Steve', 'email'=>'bbb.emaire@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Noel', 'first_name'=>'Steve', 'email'=>'bbb.oel@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Meyer', 'first_name'=>'Steve', 'email'=>'bbb.eyer@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Dufour', 'first_name'=>'Steve', 'email'=>'bbb.ufour@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Meunier', 'first_name'=>'Steve', 'email'=>'bbb.eunier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Brun', 'first_name'=>'Steve', 'email'=>'bbb.run@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Blanchard', 'first_name'=>'Steve', 'email'=>'bbb.lanchard@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Giraud', 'first_name'=>'Steve', 'email'=>'bbb.iraud@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Joly', 'first_name'=>'Steve', 'email'=>'bbb.oly@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Riviere', 'first_name'=>'Steve', 'email'=>'bbb.iviere@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Lucas', 'first_name'=>'Steve', 'email'=>'bbb.ucas@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Brunet', 'first_name'=>'Steve', 'email'=>'bbb.runet@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Gaillard', 'first_name'=>'Steve', 'email'=>'bbb.aillard@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Barbier', 'first_name'=>'Steve', 'email'=>'bbb.arbier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Arnaud', 'first_name'=>'Steve', 'email'=>'bbb.rnaud@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'2', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Martinez', 'first_name'=>'Steve', 'email'=>'bbb.artinez@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Gerard', 'first_name'=>'Steve', 'email'=>'bbb.erard@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Roche', 'first_name'=>'Steve', 'email'=>'bbb.oche@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Renard', 'first_name'=>'Steve', 'email'=>'bbb.enard@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Schmitt', 'first_name'=>'Steve', 'email'=>'bbb.chmitt@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Roy', 'first_name'=>'Steve', 'email'=>'bbb.oy@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Leroux', 'first_name'=>'Steve', 'email'=>'bbb.eroux@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'24', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Colin', 'first_name'=>'Steve', 'email'=>'bbb.olin@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Vidal', 'first_name'=>'Steve', 'email'=>'bbb.idal@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Caron', 'first_name'=>'Steve', 'email'=>'bbb.aron@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Picard', 'first_name'=>'Steve', 'email'=>'bbb.icard@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Roger', 'first_name'=>'Steve', 'email'=>'bbb.oger@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'8', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Fabre', 'first_name'=>'Steve', 'email'=>'bbb.abre@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Aubert', 'first_name'=>'Steve', 'email'=>'bbb.ubert@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Lemoine', 'first_name'=>'Steve', 'email'=>'bbb.emoine@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Renaud', 'first_name'=>'Steve', 'email'=>'bbb.enaud@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Dumas', 'first_name'=>'Steve', 'email'=>'bbb.umas@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Lacroix', 'first_name'=>'Steve', 'email'=>'bbb.acroix@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Olivier', 'first_name'=>'Steve', 'email'=>'bbb.livier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Philippe', 'first_name'=>'Steve', 'email'=>'bbb.hilippe@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'2', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Bourgeois', 'first_name'=>'Steve', 'email'=>'bbb.ourgeois@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Pierre', 'first_name'=>'Steve', 'email'=>'bbb.ierre@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Benoit', 'first_name'=>'Steve', 'email'=>'bbb.enoit@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Rey', 'first_name'=>'Steve', 'email'=>'bbb.ey@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Leclerc', 'first_name'=>'Steve', 'email'=>'bbb.eclerc@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Payet', 'first_name'=>'Steve', 'email'=>'bbb.ayet@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Rolland', 'first_name'=>'Steve', 'email'=>'bbb.olland@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Leclercq', 'first_name'=>'Steve', 'email'=>'bbb.eclercq@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Guillaume', 'first_name'=>'Steve', 'email'=>'bbb.uillaume@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Lecomte', 'first_name'=>'Steve', 'email'=>'bbb.ecomte@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Lopez', 'first_name'=>'Steve', 'email'=>'bbb.opez@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Jean', 'first_name'=>'Steve', 'email'=>'bbb.ean@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Dupuy', 'first_name'=>'Steve', 'email'=>'bbb.upuy@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Guillot', 'first_name'=>'Steve', 'email'=>'bbb.uillot@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Hubert', 'first_name'=>'Steve', 'email'=>'bbb.ubert@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'10', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Berger', 'first_name'=>'Steve', 'email'=>'bbb.erger@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'2', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Carpentier', 'first_name'=>'Steve', 'email'=>'bbb.arpentier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Sanchez', 'first_name'=>'Steve', 'email'=>'bbb.anchez@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Dupuis', 'first_name'=>'Steve', 'email'=>'bbb.upuis@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Moulin', 'first_name'=>'Steve', 'email'=>'bbb.oulin@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Louis', 'first_name'=>'Steve', 'email'=>'bbb.ouis@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Deschamps', 'first_name'=>'Steve', 'email'=>'bbb.eschamps@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Huet', 'first_name'=>'Steve', 'email'=>'bbb.uet@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Vasseur', 'first_name'=>'Steve', 'email'=>'bbb.asseur@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Perez', 'first_name'=>'Steve', 'email'=>'bbb.erez@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'3', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Boucher', 'first_name'=>'Steve', 'email'=>'bbb.oucher@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Fleury', 'first_name'=>'Steve', 'email'=>'bbb.leury@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Royer', 'first_name'=>'Steve', 'email'=>'bbb.oyer@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'3', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Klein', 'first_name'=>'Steve', 'email'=>'bbb.lein@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Jacquet', 'first_name'=>'Steve', 'email'=>'bbb.acquet@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Adam', 'first_name'=>'Steve', 'email'=>'bbb.dam@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Paris', 'first_name'=>'Steve', 'email'=>'bbb.aris@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Poirier', 'first_name'=>'Steve', 'email'=>'bbb.oirier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Marty', 'first_name'=>'Steve', 'email'=>'bbb.arty@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Aubry', 'first_name'=>'Steve', 'email'=>'bbb.ubry@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Guyot', 'first_name'=>'Steve', 'email'=>'bbb.uyot@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Carre', 'first_name'=>'Steve', 'email'=>'bbb.arre@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Charles', 'first_name'=>'Steve', 'email'=>'bbb.harles@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Renault', 'first_name'=>'Steve', 'email'=>'bbb.enault@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Charpentier', 'first_name'=>'Steve', 'email'=>'bbb.harpentier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Menard', 'first_name'=>'Steve', 'email'=>'bbb.enard@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Maillard', 'first_name'=>'Steve', 'email'=>'bbb.aillard@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Baron', 'first_name'=>'Steve', 'email'=>'bbb.aron@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Bertin', 'first_name'=>'Steve', 'email'=>'bbb.ertin@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'3', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Bailly', 'first_name'=>'Steve', 'email'=>'bbb.ailly@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Herve', 'first_name'=>'Steve', 'email'=>'bbb.erve@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Schneider', 'first_name'=>'Steve', 'email'=>'bbb.chneider@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Fernandez', 'first_name'=>'Steve', 'email'=>'bbb.ernandez@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Collet', 'first_name'=>'Steve', 'email'=>'bbb.ollet@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Leger', 'first_name'=>'Steve', 'email'=>'bbb.eger@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Bouvier', 'first_name'=>'Steve', 'email'=>'bbb.ouvier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Julien', 'first_name'=>'Steve', 'email'=>'bbb.ulien@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Prevost', 'first_name'=>'Steve', 'email'=>'bbb.revost@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Millet', 'first_name'=>'Steve', 'email'=>'bbb.illet@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Perrot', 'first_name'=>'Steve', 'email'=>'bbb.errot@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Daniel', 'first_name'=>'Steve', 'email'=>'bbb.aniel@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Cousin', 'first_name'=>'Steve', 'email'=>'bbb.ousin@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Germain', 'first_name'=>'Steve', 'email'=>'bbb.ermain@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Breton', 'first_name'=>'Steve', 'email'=>'bbb.reton@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Besson', 'first_name'=>'Steve', 'email'=>'bbb.esson@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Langlois', 'first_name'=>'Steve', 'email'=>'bbb.anglois@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Remy', 'first_name'=>'Steve', 'email'=>'bbb.emy@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Pelletier', 'first_name'=>'Steve', 'email'=>'bbb.elletier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'3', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Leveque', 'first_name'=>'Steve', 'email'=>'bbb.eveque@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Perrier', 'first_name'=>'Steve', 'email'=>'bbb.errier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Leblanc', 'first_name'=>'Steve', 'email'=>'bbb.eblanc@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Barre', 'first_name'=>'Steve', 'email'=>'bbb.arre@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Lebrun', 'first_name'=>'Steve', 'email'=>'bbb.ebrun@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Marchal', 'first_name'=>'Steve', 'email'=>'bbb.archal@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Weber', 'first_name'=>'Steve', 'email'=>'bbb.eber@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Mallet', 'first_name'=>'Steve', 'email'=>'bbb.allet@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Hamon', 'first_name'=>'Steve', 'email'=>'bbb.amon@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Boulanger', 'first_name'=>'Steve', 'email'=>'bbb.oulanger@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Jacob', 'first_name'=>'Steve', 'email'=>'bbb.acob@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Monnier', 'first_name'=>'Steve', 'email'=>'bbb.onnier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Michaud', 'first_name'=>'Steve', 'email'=>'bbb.ichaud@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Rodriguez', 'first_name'=>'Steve', 'email'=>'bbb.odriguez@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Guichard', 'first_name'=>'Steve', 'email'=>'bbb.uichard@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Gillet', 'first_name'=>'Steve', 'email'=>'bbb.illet@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Etienne', 'first_name'=>'Steve', 'email'=>'bbb.tienne@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Grondin', 'first_name'=>'Steve', 'email'=>'bbb.rondin@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Poulain', 'first_name'=>'Steve', 'email'=>'bbb.oulain@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Tessier', 'first_name'=>'Steve', 'email'=>'bbb.essier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Chevallier', 'first_name'=>'Steve', 'email'=>'bbb.hevallier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Collin', 'first_name'=>'Steve', 'email'=>'bbb.ollin@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Chauvin', 'first_name'=>'Steve', 'email'=>'bbb.hauvin@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Bouchet', 'first_name'=>'Steve', 'email'=>'bbb.ouchet@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Gay', 'first_name'=>'Steve', 'email'=>'bbb.ay@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Lemaitre', 'first_name'=>'Steve', 'email'=>'bbb.emaitre@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Benard', 'first_name'=>'Steve', 'email'=>'bbb.enard@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Marechal', 'first_name'=>'Steve', 'email'=>'bbb.arechal@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Humbert', 'first_name'=>'Steve', 'email'=>'bbb.umbert@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Reynaud', 'first_name'=>'Steve', 'email'=>'bbb.eynaud@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Antoine', 'first_name'=>'Steve', 'email'=>'bbb.ntoine@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Hoarau', 'first_name'=>'Steve', 'email'=>'bbb.oarau@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Perret', 'first_name'=>'Steve', 'email'=>'bbb.erret@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Barthelemy', 'first_name'=>'Steve', 'email'=>'bbb.arthelemy@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Cordier', 'first_name'=>'Steve', 'email'=>'bbb.ordier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Pichon', 'first_name'=>'Steve', 'email'=>'bbb.ichon@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'3', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Lejeune', 'first_name'=>'Steve', 'email'=>'bbb.ejeune@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Gilbert', 'first_name'=>'Steve', 'email'=>'bbb.ilbert@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Lamy', 'first_name'=>'Steve', 'email'=>'bbb.amy@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Delaunay', 'first_name'=>'Steve', 'email'=>'bbb.elaunay@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Pasquier', 'first_name'=>'Steve', 'email'=>'bbb.asquier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Carlier', 'first_name'=>'Steve', 'email'=>'bbb.arlier@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
        $obj = App\User::create(['last_name'=>'Laporte', 'first_name'=>'Steve', 'email'=>'bbb.aporte@fakecesi.fr', 'password'=>bcrypt('cesi'), 'id_campus'=>'22', 'id_roles'=>'1', 'id_images'=>'1']);
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
