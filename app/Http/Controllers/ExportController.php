<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function showForm()

    {

    	return view('report');
    }
}
