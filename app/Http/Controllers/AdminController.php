<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Event;


class AdminController extends Controller
{
	public function dashboard()
    {
    	return view('admin/dashboard');
    }
    public function shopAdmin()
    {
        $shop = Article::all();
    	return view('admin/shopAdmin',compact('shop'));
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
}