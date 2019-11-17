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
        $shop = Article::all();
        $categories = Category::all();
    	return view('admin/shopAdmin',compact('shop'))->with('categories', $categories);
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

    public function deleteEvent()
    {
        $id_event = request('id_event');

        $obj = Event::find($id_event);
        $obj->delete();
        return back()->with('messageGreen', 'Événement supprimé');
    }
}
