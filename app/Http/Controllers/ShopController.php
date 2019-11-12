<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Order;
use App\Comanded;

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
    	return view('article',compact('article'), compact('id'));
    }

    public function addToCard($id){
        
        $temp_id_user = 1;

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
            return redirect('cart');
        }
        
    	//return view('article',compact('article'));
    }

    
}
