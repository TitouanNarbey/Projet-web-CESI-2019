<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ShopController extends Controller
{
    public function shops()
    {
       
        if ( !isset($_GET['search'])) {
            $shop = Article::all();
        }
        else {
            $var = "%".$_GET['search']."%";
            $shop = Article::where('name', 'like', $var)->get();

        }
    
		return view('shop',compact('shop'));
    	
    }

    public function shop($id){

    	$article = Article::find($id);
    	return view('article',compact('article'));
    }
}
