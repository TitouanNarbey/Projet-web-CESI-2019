<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Event;
use App\Image;
use App\Category;
use Auth;


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

    public function postCreateEvent()
    {

        request()->validate
            ([
                'title'=>'required',
                'text'=>'required',
                'price'=>'required',
                'start_date'=>'required',
            ]);

        $title = request()->title;
        $text = request()->text;
        $price = request()->price;
        $old_start_date = request()->start_date;
        $start_date = date("Y-m-d", strtotime($old_start_date));
        $old_end_date = request()->end_date;
        $end_date = date("Y-m-d", strtotime($old_end_date));

        if($end_date === '1970-01-01')
        {
            $end_date = null;
        }

        if(request()->recurrent === null)
        {
            $recurrent = 0;
        }
        else
        {
            $recurrent = 1;
        }

        $obj = Event::create(['name'=>$title, 'description'=>$text, 'start_date'=>$start_date, 'end_date'=>$end_date, 'price'=>$price, 'recurrent'=>$recurrent, 'validate'=>'1', 'id_images'=>2, 'id_users'=>Auth::user()->id]);
        
        return redirect('/admin/events')->with('messageGreen', 'Evenement ajouté');
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
