<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use Auth;

/**
 * this is the report controller
 */
class ReportController extends Controller
{
	/**
	 * go to the form to report
	 */
	public function showForm()
	{
		// restraint access
		if(Auth::user() !== null)
		{
			if(Auth::user()->id_roles == 3)
			{
				// accept user
				return view('report');
			}
			else
			{
				// reject user
				return redirect('/home')->with('messageRed', 'Vous n\'avez pas le droit d\'accéder à cette page.');
			}
		}
		else
		{
			//reject user
			return redirect('/home')->with('messageRed', 'Vous n\'avez pas le droit d\'accéder à cette page.');
		}
	}

	/**
	 * function to post the report
	 */
	public function postReport()
	{
		// restraint access
		if(Auth::user() !== null)
		{
			if(Auth::user()->id_roles == 3)
			{
				// get post data
				$type = request('type');
				$link = request('link');
				$text = request('text');

				// create a report in BDD
				$obj = Report::create(['type'=>$type, 'link'=>$link, 'text'=>$text]);

				// success
				return redirect('/profile')->with('messageGreen', 'Votre signalement a été envoyé.');
			}
			else
			{
				// reject
				return redirect('/home')->with('messageRed', 'Vous n\'avez pas le droit d\'accéder à cette page.');
			}
		}
		else
		{
			//reject
			return redirect('/home')->with('messageRed', 'Vous n\'avez pas le droit d\'accéder à cette page.');
		}
	}

	/**
	 * function to delete a report
	 */
	public function deleteReport()
	{
		// restraint access
		if(Auth::user() !== null)
		{
			if(Auth::user()->id_roles == 2)
			{
				// get post data
				$id_report = request('id_report');

				// delete
				$obj = Report::find($id_report);
				$obj->delete();

				// success
				return redirect('/profile')->with('messageGreen', 'Signalement effacé.');
			}
			else
			{
				// reject
				return redirect('/home')->with('messageRed', 'Vous n\'avez pas le droit d\'accéder à cette page.');
			}
		}
		else
		{
			// reject
			return redirect('/home')->with('messageRed', 'Vous n\'avez pas le droit d\'accéder à cette page.');
		}
	}
}
