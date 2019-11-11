<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ShopController extends Controller
{
    public function shops()
    {
    	$shop = Article::all();
		return view('shop',compact('shop'));
    	
    }

    public function shop($id){

    	$article = Article::find($id);
    	return view('article',compact('article'));
    }
}
