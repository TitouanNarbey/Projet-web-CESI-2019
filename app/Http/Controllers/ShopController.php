<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Order;
use App\Comanded;
use App\Category;
use Session;

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
        if ( isset($_GET['recurrent'])) {
            $shop = Article::where('recurrent', '=', 1)->get();
        }
        else {
        }
        if ( isset($_GET['unique'])) {
            $shop = Article::where('recurrent', '<>', 1)->get();
        }
        else {
        }
        if ( isset($_GET['decroissant'])) {
            $shop = Article::where('id', '<>', 0)->orderBy('price','DESC')->get();
        }
        else {
        }
        if ( isset($_GET['croissant'])) {
            $shop = Article::where('id', '<>', 0)->orderBy('price','ASC')->get();
        }
        else {
        }
        if ( isset($_GET['id_category'])) {
            
            $categories = Category::all();
            $shop = Article::where('id_category', '=', $_GET['id_category'])->get();
        }
        else {
                    $categories = Category::all();

        }


        return view('shop',compact('shop'),compact('categories'));
    	
    }

    public function shop($id){

    	$article = Article::find($id);
    	return view('article',compact('article'), compact('id'));
    }

    public function addToCard($id){
        
        $temp_id_user = Session::get('id');

        $quantity = request('inputQuantity');
        
        $orders = Order::where('id_users', '=', $temp_id_user)->get();
        
        /////     Cart     /////
        //cherche cart
        $haveCart = 0;
        foreach($orders as $order)
        {
            if(!$order->paid)
            { $haveCart = $order->id; }
        }

        //creation of cart if needed
        if($haveCart == 0)
        {
            $cart = Order::create(['paid'=>'0', 'delivered'=>'0', 'id_users'=>$temp_id_user]);
            $haveCart = $cart->id;
        }

        $cart = Order::find($haveCart);
        ////////////////////////

        $dejaArticle = null;
        foreach($order->comanded as $comand)
        {
            if($comand->article->id == $id)
            {
                $dejaArticle = $comand;
            }
        }

        if($dejaArticle == null)
        {
            $dejaArticle = Comanded::create(['id_orders'=>$cart->id, 'id_articles'=>$id, 'quantity'=>$quantity]);
            return redirect('shop/'.$id)->with('messageGreen', 'Article ajouté au panier');
        }
        else
        {
            return redirect('cart')->with('messageRed', 'Article déja dans le panier. Vous pouvez modifier la quantité.');
        }
        
    	//return view('article',compact('article'));
    }

    
}
