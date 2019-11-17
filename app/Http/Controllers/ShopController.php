<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Order;
use App\Comanded;
use App\Category;
use Session;
use Auth;

/*
*Controller of the shop
*/
class ShopController extends Controller
{
    /*
    *Returning of one view with different parameters
    */
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
        if ( isset($_GET['unique'])) {
            $shop = Article::where('recurrent', '<>', 1)->get();
        }
        if ( isset($_GET['decroissant'])) {
            $shop = Article::where('id', '<>', 0)->orderBy('price','DESC')->get();
        }
        if ( isset($_GET['croissant'])) {
            $shop = Article::where('id', '<>', 0)->orderBy('price','ASC')->get();
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

    /*
    *view of an item
    */
    public function shop($id){

    	$article = Article::find($id);
    	return view('article',compact('article'), compact('id'));
    }

    /*
    *add an item in the shopping cart
    */
    public function addToCard($id){
        
        if(Auth::user() !== null)
        {
            $temp_id_user = Auth::user()->id;

            $quantity = request('inputQuantity');
            
            $orders = Order::where('id_users', '=', $temp_id_user)->get();
            
            /////     Cart     /////
            $haveCart = 0;

            //creation of a cart if needed
            foreach($orders as $order)
            {
                if(!$order->paid)
                { $haveCart = $order->id; }
            }

            //look up cart
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
    
            //add the article and show the validation pop-up
            if($dejaArticle == null)
            {
                $dejaArticle = Comanded::create(['id_orders'=>$cart->id, 'id_articles'=>$id, 'quantity'=>$quantity]);
                return redirect('shop/'.$id)->with('messageGreen', 'Article ajouté au panier');
            }
            else
            {
                return redirect('cart')->with('messageRed', 'Article déjà dans le panier. Vous pouvez modifier la quantité.');
            }
        }
        else
        {
            return redirect('shop/'.$id)->with('messageRed', 'Veuillez vous connecter pour ajouter un produit à votre panier.');
        }   
    }
}
