<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use Auth;

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

    public function postReport()
    {
        if(Auth::user() !== null)
        {
            if(Auth::user()->id_roles == 3)
            {
                $type = request('type');
                $link = request('link');
                $text = request('text');

                $obj = Report::create(['type'=>$type, 'link'=>$link, 'text'=>$text]);

                return redirect('/profile')->with('messageGreen', 'Votre signalement a été envoyé.');
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
