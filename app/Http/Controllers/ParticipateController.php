<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConnexionParticipate;
use App\Exports\ConnexionParticipateExport;
use Maatwebsite\Excel\Facades\Excel;

class ParticipateController extends Controller
{
     
public function export() 
{
        return Excel::download(new ConnexionParticipateExport, 'listeParticipants.csv');
}
}