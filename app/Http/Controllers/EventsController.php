<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\ConnexionParticipate;
use Auth;

class EventsController extends Controller
{
    public function events()
    {
    	if ( !isset($_GET['search'])) {
            $events = Event::all();
        }
        else {
            $var = "%".$_GET['search']."%";
            $events = Event::where('name', 'like', $var)->get();
        }
        if ( isset($_GET['recurrent'])) {
            $events = Event::where('recurrent', '=', 1)->get();
        }
        else {
        }
        if ( isset($_GET['unique'])) {
            $events = Event::where('recurrent', '<>', 1)->get();
        }
        else {
        }
        if ( isset($_GET['decroissant'])) {
            $events = Event::where('id', '<>', 0)->orderBy('price','DESC')->get();
        }
        else {
        }
        if ( isset($_GET['croissant'])) {
            $events = Event::where('id', '<>', 0)->orderBy('price','ASC')->get();
        }
        else {
        }
       
		return view('events',compact('events'));	
    }

    public function event($id){

    	$event = Event::find($id);
    	return view('event',compact('event'));
    }

    public function eventAction($id){
        
        $event = Event::find($id);
        $participate = ConnexionParticipate::where('id_events', $id)->where('id_users', Auth::user()->id);

        if(Auth::user() !== null)
        {
            if(Auth::user()->id_roles != 3)
            {
                $obj = ConnexionParticipate::create(['id_events'=>$id, 'id_users'=>Auth::user()->id]);
                return redirect('events/'.$id)->with('messageGreen', 'Vous participez désormais à cette activité.')->with('participate', '1');
            }
            else
            {
                return redirect('events/'.$id)->with('messageRed', 'Vous ne pouvez pas vous inscrire à un événement.');
            }
        }
        else
        {
            return redirect('events/'.$id)->with('messageRed', 'Veuillez vous connecter pour vous inscrire à un événement.');
        }

        
    }
}
