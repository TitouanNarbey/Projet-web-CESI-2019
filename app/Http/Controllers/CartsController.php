<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartsController extends Controller
{
    public function showCart()
    {
    	return view('cart');
    }
    public function showCheckout()
    {
    	return view('checkout');
    }
}
