<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\ConnexionParticipate;
use Maatwebsite\Excel\Facades\Excel;
use App\Event;

class ParticipateController extends Controller
{
     
public function export($id) 
{


       $event = Event::find($id);

     
	return view('view',compact('event'));
    
    


}
}