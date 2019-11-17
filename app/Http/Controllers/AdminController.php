<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Event;
use App\Image;
use App\Category;
use App\Post;
use Auth;

/**
 * this is the admin controller
 */
class AdminController extends Controller
{
	/**
	 * go to admin dashboard
	 */
	public function dashboard()
	{
		return view('admin/dashboard');
	}

	/**
	 * go to list of events in admin mode
	 */
	public function eventsAdmin()
	{
		$events = Event::all();
		return view('admin/eventsAdmin',compact('events'));
	}

	/**
	 * go to view for manage an event in admin mode
	 */
	public function eventAdmin($id)
	{
		$event = Event::find($id);
		return view('admin/eventAdmin',compact('event'));
	}

	/**
	 * create an article
	 */
	public function createArticle()
	{
		$categories = Category::all();
		return view('admin/createArticle')->with('categories', $categories);
	}

	/**
	 * create article function
	 */
	public function postCreateArticle()
	{
		// get post
		request()->validate
		([
			'title'=>'required',
			'text'=>'required',
			'price'=>'required',
			'stock'=>'required',
		]);

		// define variables
		$title = request()->title;
		$text = request()->text;
		$price = request()->price;
		$stock = request()->stock;
		$category = request()->category;
		$custom_category = request()->custom_category;

		// verify if we need to create a new category
		if($custom_category !== null)
		{
			$bddcategory = Category::create(['name'=>$custom_category]);
			$category = $bddcategory->id;
		}

		// create new article in BDD
		$obj = Article::create(['name'=>$title, 'description'=>$text, 'id_category'=>$category, 'id_images'=>'3', 'id_campus'=>'22', 'stock'=>$stock, 'price'=>$price]);

		// redirect to admin's shop page
		return redirect('/admin/shop')->with('messageGreen', 'Article ajouté');
	}

	/**
	 * go to page to create a new event
	 */
	public function createEvent()
	{
		return view('admin/createEvent');
	}

	/**
	 * function create a new event
	 */
	public function postCreateEvent()
	{
		// get post
		request()->validate
		([
			'title'=>'required',
			'text'=>'required',
			'price'=>'required',
			'start_date'=>'required',
		]);

		// define variables
		$title = request()->title;
		$text = request()->text;
		$price = request()->price;
		$old_start_date = request()->start_date;
		$start_date = date("Y-m-d", strtotime($old_start_date));
		$old_end_date = request()->end_date;
		$end_date = date("Y-m-d", strtotime($old_end_date));

		// verify if end_date is post as null
		if($end_date === '1970-01-01')
		{
			$end_date = null;
		}

		// set recurrent variable to correct value
		if(request()->recurrent === null)
		{
			$recurrent = 0;
		}
		else
		{
			$recurrent = 1;
		}

		// create new event in BDD
		$obj = Event::create(['name'=>$title, 'description'=>$text, 'start_date'=>$start_date, 'end_date'=>$end_date, 'price'=>$price, 'recurrent'=>$recurrent, 'validate'=>'1', 'id_images'=>'3', 'id_users'=>Auth::user()->id]);

		// redirect to admin's shop page
		return redirect('/admin/events')->with('messageGreen', 'Evenement ajouté');
	}

	/**
	 * function to delete article
	 */
	public function deleteArticle()
	{
		$id_article = request('id_article');

		// delete article
		$obj = Article::find($id_article);
		$obj->delete();

		return back()->with('messageGreen', 'Article supprimé');
	}

	/**
	 * go to page to display all articles in admin mode with filter
	 */
	public function triAdminArticle()
	{
		$shop = Article::all();
		$categories = Category::all();

		// filter
		if ( isset($_GET['decroissant']))
		{
			$shop = Article::where('id', '<>', 0)->orderBy('price','DESC')->get();
		}
		if ( isset($_GET['croissant'])) {
			$shop = Article::where('id', '<>', 0)->orderBy('price','ASC')->get();
		}
		if ( isset($_GET['id_category']))
		{
			$categories = Category::all();
			$shop = Article::where('id_category', '=', $_GET['id_category'])->get();
		}
		else
		{
			$categories = Category::all();
		}

		// return view with filter option
		return view('admin/shopAdmin',compact('shop'))->with('categories', $categories);;
	}

	/**
	 * function to delete en event
	 */
	public function deleteEvent()
	{
		$id_event = request('id_event');

		$obj = Event::find($id_event);
		$obj->delete();
		return back()->with('messageGreen', 'Événement supprimé');
	}

	/**
	 * go to page to display all events in admin mode with filte
	 */
	public function triAdminEvent()
	{
		// filter
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
		if ( isset($_GET['old'])) {

			$events = Event::where('start_date', '<',date("Y-m-d"))->get();

		}
		else {
		}
		if ( isset($_GET['soon'])) {

			$month_soon = date("m")+1;
			$events = Event::where('start_date', '>',date("Y-$month_soon-01"))->get();
		}
		else {
		}

		// return view with filter option
		return view('admin/eventsAdmin',compact('events'));
	}

	/**
	 * function to delete comment
	 */
	public function deleteComment()
	{
		$id = request('id_post');

		// delete
		$post = Post::find($id);
		$post->delete();

		return back()->with('messageGreen', 'Commentaire supprimé');
	}
}
