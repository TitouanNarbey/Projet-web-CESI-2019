<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Event;
use App\Image;
use App\User;
use App\Illustrateeventsmulti;
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
        if ( isset($_GET['actual'])) {

            $month = date("m");
            $bissextile = date("L");
            

            switch($month)
            {
                case 1 :

                $day = 31;
                $events = Event::where('start_date', '<',date("Y-m-$day"))->where('start_date', '>',date("Y-m-01"))->get();
                break;

                case 2 :

                if ($bissextile = 1){

                $day = 29;
                $events = Event::where('start_date', '<',date("Y-m-$day"))->where('start_date', '>',date("Y-m-01"))->get();
                break;
                }
                else
                {
                    $day = 28;
                $events = Event::where('start_date', '<',date("Y-m-$day"))->where('start_date', '>',date("Y-m-01"))->get();
                break; 
                }
                case 3 :

                $day = 31;
                $events = Event::where('start_date', '<',date("Y-m-$day"))->where('start_date', '>',date("Y-m-01"))->get();
                break;
                case 4 :

                $day = 30;
                $events = Event::where('start_date', '<',date("Y-m-$day"))->where('start_date', '>',date("Y-m-01"))->get();
                break;
                case 5 :

                $day = 31;
                $events = Event::where('start_date', '<',date("Y-m-$day"))->where('start_date', '>',date("Y-m-01"))->get();
                break;
                case 6 :

                $day = 30;
                $events = Event::where('start_date', '<',date("Y-m-$day"))->where('start_date', '>',date("Y-m-01"))->get();
                break;
                case 7 :

                $day = 31;
                $events = Event::where('start_date', '<',date("Y-m-$day"))->where('start_date', '>',date("Y-m-01"))->get();
                break;
                case 8 :

                $day = 31;
                $events = Event::where('start_date', '<',date("Y-m-$day"))->where('start_date', '>',date("Y-m-01"))->get();
                break;
                case 9 :

                $day = 30;
                $events = Event::where('start_date', '<',date("Y-m-$day"))->where('start_date', '>',date("Y-m-01"))->get();
                break;
                case 10 :

                $day = 31;
                $events = Event::where('start_date', '<',date("Y-m-$day"))->where('start_date', '>',date("Y-m-01"))->get();
                break;
                case 11 :

                $day = 30;
                $events = Event::where('start_date', '<',date("Y-m-$day"))->where('start_date', '>',date("Y-m-01"))->get();
                break;
                case 12 :

                $day = 31;
                $events = Event::where('start_date', '<',date("Y-m-$day"))->where('start_date', '>',date("Y-m-01"))->get();
                break;
            }
        }
        else {
        }
        if ( isset($_GET['soon'])) {

            $month_soon = date("m")+1;
            $events = Event::where('start_date', '>',date("Y-$month_soon-01"))->get();
        }
        else {
        }
       
		return view('events',compact('events'));	
    }

    public function event($id){

        $event = Event::find($id);

        if(Auth::user() !== null)
        {
            if(Auth::user()->id_roles != 3)
            {
                $participate = ConnexionParticipate::where('id_events', $id)->where('id_users', Auth::user()->id)->get();
                $sub = 0;
                if(isset($participate[0]))
                {
                    $sub = 1;
                }
                else
                {
                    $sub = 0;
                }
                return view('event', compact('event'), compact('sub'));
            }
            else
            {
                return view('event', compact('event'));
            }
        }
        else
        {
            return view('event', compact('event'));
        }
    }

    public function eventAction($id){
        
        $event = Event::find($id);
        $inscription = request('inscription');

        if(Auth::user() !== null)
        {
            if(Auth::user()->id_roles != 3)
            {
                if($inscription == 1)
                {
                    $obj = ConnexionParticipate::create(['id_events'=>$id, 'id_users'=>Auth::user()->id]);
                    return redirect('events/'.$id)->with('messageGreen', 'Vous participez désormais à cette activité.')->with('participate', '1');
                }
                else
                {
                    $obj = ConnexionParticipate::where('id_events', $id)->where('id_users', Auth::user()->id);
                    $obj->delete();
                    return redirect('events/'.$id)->with('messageGreen', 'Vous ne participez plus à cette activité.')->with('participate', '0');
                }
            }
            else
            {
                return redirect('events/'.$id)->with('messageRed', 'Vous ne pouvez pas vous inscrire à un événement.')->with('participate', '0');
            }
        }
        else
        {
            return redirect('events/'.$id)->with('messageRed', 'Veuillez vous connecter pour vous inscrire à un événement.')->with('participate', '0');
        }
    }

    public function imageUploadPost($id){
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('assets/img/events'), $imageName);


        $objImage = Image::create(['path'=>'/assets/img/events/'.$imageName, 'alt'=>'']);

        $obj = Illustrateeventsmulti::create(['id_images'=>$objImage->id, 'id_events'=>$id, 'id_users'=>Auth::user()->id]);

        return back()
            ->with('Votre image a bien été ajouté.')
            ->with('image',$imageName);
    }

    public function postComment($id){

        $text = request('text');
        $user_id = Auth::user()->id;

        $comment = Post::create(['text'=>$text, 'date'=>now(), 'id_events'=>$id, 'id_users'=>$user_id]);

        return redirect('events/'.$id);
    }
}
