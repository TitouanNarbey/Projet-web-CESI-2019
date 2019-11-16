<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function showForm()
    {
        if(Auth::user() !== null)
        {
            if(Auth::user()->id_roles == 3)
            {
                return view('report');
            }
            else
            {
                return redirect('/home')->with('messageRed', 'Vous n\'avez pas le droit d\'accéder à cette page.');
            }
        }
        else
        {
            return redirect('/home')->with('messageRed', 'Vous n\'avez pas le droit d\'accéder à cette page.');
        }
    }
}
