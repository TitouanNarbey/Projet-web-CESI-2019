<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\ConnexionParticipate;
use Maatwebsite\Excel\Facades\Excel;
use App\Event;

/**
 * this is the participate controller
 */
class ParticipateController extends Controller
{
	/**
	 * export user list in csv
	 */
	public function export($id) 
	{
		$event = Event::find($id);
		return view('view',compact('event'));
	}
}