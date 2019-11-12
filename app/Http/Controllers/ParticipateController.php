<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConnexionParticipate;
use App\Exports\ConnexionParticipateExport;
use Maatwebsite\Excel\Facades\Excel;

class ParticipateController extends Controller
{
     public function create()
    {
        return view('form');

    }

public function index()
{
        $shows = ConnexionParticipate::all();

        return view('list', compact('shows'));
}
public function export() 
{
        return Excel::download(new ConnexionParticipateExport, 'liste.csv');
}
}