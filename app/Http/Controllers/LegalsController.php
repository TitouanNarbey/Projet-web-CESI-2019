<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*
*Controller of the redirection to the 2 legals conditions pages
*/
class LegalsController extends Controller
{
    public function showCGV()
    {
    	return view('legalcgv');
    }
    
    public function showLegalNotices()
    {
    	return view('legal');
    }
}
