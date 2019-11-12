<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalsController extends Controller
{
    /*public function showCGV()
    {
    	return view('legalcgv');
    }*/
    public function showLegalNotices()
    {
    	return view('legal');
    }
}
