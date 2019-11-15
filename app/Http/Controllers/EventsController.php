<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Event;
use App\ConnexionParticipate;
use App\Post;
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
        $user = Auth::user();
    	return view('event', compact('event'), compact('user'));
    }

    public function eventAction($id){
        
        $event = Event::find($id);
        $participate = ConnexionParticipate::where('id_events', $id)->where('id_users', Auth::user()->id);

        if(Auth::user() !== null)
        {
            if(Auth::user()->id_roles != 3)
            {
                $obj = ConnexionParticipate::create(['id_events'=>$id, 'id_users'=>Auth::user()->id]);
                if(isset($obj[0]))
                {
                    return redirect('events/'.$id)->with('messageGreen', 'Vous participez désormais à cette activité.')->with('participate', '1');
                }
                else
                {
                    return redirect('events/'.$id)->with('messageGreen', 'Vous participez désormais à cette activité.')->with('participate', '0');
                }
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

    public function postComment($id){

        $text = request('text');
        $user_id = Auth::user()->id;

        $comment = Post::create(['text'=>$text, 'date'=>now(), 'id_events'=>$id, 'id_users'=>$user_id]);

        return redirect('events/'.$id);
    }
}
