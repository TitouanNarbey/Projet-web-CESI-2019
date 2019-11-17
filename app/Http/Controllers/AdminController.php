<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Event;
use App\Category;


class AdminController extends Controller
{
	public function dashboard()
    {
    	return view('admin/dashboard');
    }
    public function shopAdmin()
    {
       /* $shop = Article::all();
        $categories = Category::all();
    	return view('admin/shopAdmin',compact('shop'))->with('categories', $categories);*/
    }
   /* public function articleAdmin()
    {
    	return view('admin/articleAdmin');
    }*/
    public function eventsAdmin()
    {
        $events = Event::all();
    	return view('admin/eventsAdmin',compact('events'));
    }
    public function eventAdmin($id)
    {
        $event = Event::find($id);
        return view('admin/eventAdmin',compact('event'));
    }
    public function createArticle()
    {
    	return view('admin/createArticle');
    }
    public function createEvent()
    {
    	return view('admin/createEvent');
    }

    public function deleteArticle()
    {
        $id_article = request('id_article');

        $obj = Article::find($id_article);
        $obj->delete();
        return back()->with('messageGreen', 'Article supprimé');
    }

    public function triAdminArticle()
    {
        $shop = Article::all();
        $categories = Category::all();
        
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

        return view('admin/shopAdmin',compact('shop'))->with('categories', $categories);;
    }

    public function deleteEvent()
    {
        $id_event = request('id_event');

        $obj = Event::find($id_event);
        $obj->delete();
        return back()->with('messageGreen', 'Événement supprimé');
    }

    public function triAdminEvent()
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
       
        return view('admin/eventsAdmin',compact('events'));    
    }
}
