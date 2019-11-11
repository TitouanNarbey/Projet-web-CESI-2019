<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    public function events()
    {
    	$events = Event::all();
		return view('events',compact('events'));	
    }
    public function event($id){

    	$event = Event::find($id);
    	return view('event',compact('event'));
    }

}
