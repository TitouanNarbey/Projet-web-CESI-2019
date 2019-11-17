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

        // delete link to images
        foreach($obj->illustratearticlesmulti as $linkImagesMulti)
        {
            $linkImagesMulti->delete();
        }
        // delete link to comand
        foreach($obj->comanded as $comand)
        {
            $comand->delete();
        }

        $obj->delete();
        return back()->with('messageGreen', 'Article supprimé');
    }
}
