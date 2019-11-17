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
use App\EventOfTheMonth;
use Auth;
use App\BestArticle;
use App\ConnexionVoted;

/**
 *  this is the event controller
 */
class EventsController extends Controller
{
	/**
	 * go to page to display all events with filter
	 */
	public function events()
	{
		// filter
		if ( !isset($_GET['search']))
		{
			$events = Event::all();
		}
		else
		{
			$var = "%".$_GET['search']."%";
			$events = Event::where('name', 'like', $var)->get();
		}
		if ( isset($_GET['recurrent']))
		{
			$events = Event::where('recurrent', '=', 1)->get();
		}
		if ( isset($_GET['unique']))
		{
			$events = Event::where('recurrent', '<>', 1)->get();
		}
		if ( isset($_GET['decroissant']))
		{
			$events = Event::where('id', '<>', 0)->orderBy('price','DESC')->get();
		}
		if ( isset($_GET['croissant']))
		{
			$events = Event::where('id', '<>', 0)->orderBy('price','ASC')->get();
		}
		if ( isset($_GET['actual']))
		{
			// get variables
			$month = date("m");
			$bissextile = date("L");

			// depend of the current month
			switch($month)
			{
				case 1 :
					$day = 31;
					$events = Event::where('start_date', '<',date("Y-m-$day"))->where('start_date', '>',date("Y-m-01"))->get();
				break;

				case 2 :
					if ($bissextile = 1)
					{
						$day = 29;
						$events = Event::where('start_date', '<',date("Y-m-$day"))->where('start_date', '>',date("Y-m-01"))->get();
					}
					else
					{
						$day = 28;
						$events = Event::where('start_date', '<',date("Y-m-$day"))->where('start_date', '>',date("Y-m-01"))->get();
					}
				break;

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
		if(isset($_GET['soon']))
		{
			$month_soon = date("m")+1;
			$events = Event::where('start_date', '>',date("Y-$month_soon-01"))->get();
		}
		return view('events',compact('events'));
	}

	/**
	 * go to event page
	 */
	public function event($id){

		$event = Event::find($id);

		// count number of like
		$likes = ConnexionVoted::where('id_events', $id)->count();

		// restraint access
		if(Auth::user() !== null)
		{
			if(Auth::user()->id_roles != 3)
			{
				// get informations
				$participate = ConnexionParticipate::where('id_events', $id)->where('id_users', Auth::user()->id)->get();
				$liked = ConnexionVoted::where('id_events', $id)->where('id_users', Auth::user()->id)->get();

				// set information for view
				$sub = 0;
				if(isset($participate[0]))
				{
					$sub = 1;
				}
				else
				{
					$sub = 0;
				}

				if(isset($liked[0]))
				{
					$like = 1;
				}
				else
				{
					$like = 0;
				}

				// return to view with parameters
				return view('event', compact('event'))->with('sub',$sub)->with('like',$like)->with('likes',$likes);
			}
			else
			{
				// return to view with parameters
				return view('event', compact('event'))->with('likes',$likes);
			}
		}
		else
		{
			// return to view with parameters
			return view('event', compact('event'))->with('likes',$likes);
		}
	}

	/**
	 * make action depending of user choise in event
	 */
	public function eventAction($id){

		// get post informations
		$event = Event::find($id);
		$inscription = request('inscription');

		// restraint access
		if(Auth::user() !== null)
		{
			if(Auth::user()->id_roles != 3)
			{
				// is register in this event ?
				if($inscription == 1)
				{
					$obj = ConnexionParticipate::create(['id_events'=>$id, 'id_users'=>Auth::user()->id]);

					// return to view with parameters
					return redirect('events/'.$id)->with('messageGreen', 'Vous participez désormais à cette activité.')->with('participate', '1');
				}
				else
				{
					$obj = ConnexionParticipate::where('id_events', $id)->where('id_users', Auth::user()->id);
					$obj->delete();

					// return to view with parameters
					return redirect('events/'.$id)->with('messageGreen', 'Vous ne participez plus à cette activité.')->with('participate', '0');
				}
			}
			else
			{
				// return to view with parameters
				return redirect('events/'.$id)->with('messageRed', 'Vous ne pouvez pas vous inscrire à un événement.')->with('participate', '0');
			}
		}
		else
		{
			// return to view with parameters
			return redirect('events/'.$id)->with('messageRed', 'Veuillez vous connecter pour vous inscrire à un événement.')->with('participate', '0');
		}
	}

	/**
	 * post a new images to event
	 */
	public function imageUploadPost($id){

		//get post informations
		request()->validate([
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);

		// store image
		$imageName = time().'.'.request()->image->getClientOriginalExtension();
		request()->image->move(public_path('assets/img/events'), $imageName);

		// create image in BDD
		$objImage = Image::create(['path'=>'/assets/img/events/'.$imageName, 'alt'=>'']);

		// link event and image
		$obj = Illustrateeventsmulti::create(['id_images'=>$objImage->id, 'id_events'=>$id, 'id_users'=>Auth::user()->id]);


		// return back with parameters
		return back()
			->with('messageGreen', 'Votre image a bien été ajouté.')
			->with('image',$imageName);
	}

	/**
	 * post a comment below 
	 */
	public function postComment($id){

		//get post informations
		$text = request('text');
		$user_id = Auth::user()->id;

		// create post in BDD
		$comment = Post::create(['text'=>$text, 'date'=>now(), 'id_events'=>$id, 'id_users'=>$user_id]);

		return redirect('events/'.$id);
	}

	/**
	 * return to home
	 */
	public function homeEventArticle(){

		$events = EventOfTheMonth::all();
		$articles = BestArticle::all();

		return view('home', compact('events'),compact('articles'));
	}

	/**
	 * function to add a like
	 */
	public function giveLike(){

		//get post informations
		$id = request('event_id');

		// restraint access
		if(Auth::user() !== null)
		{
			if(Auth::user()->id_roles != 3)
			{
				$liked = ConnexionVoted::where('id_events', $id)->where('id_users', Auth::user()->id)->get();

				if(!isset($liked[0]))
				{
					$obj = ConnexionVoted::create(['id_events'=>$id, 'id_users'=>Auth::user()->id]);
				}
			}
		}
		return redirect('/events/'.$id);
	}

	/**
	 * function to add a like
	 */
	public function removeLike(){

		//get post informations
		$event_id = request('event_id');

		// restraint access
		if(Auth::user() !== null)
		{
			if(Auth::user()->id_roles != 3)
			{
				$liked = ConnexionVoted::where('id_events', $event_id)->where('id_users', Auth::user()->id);

				$liked->delete();
			}
		}
		return redirect('/events/'.$event_id);
	}
}
