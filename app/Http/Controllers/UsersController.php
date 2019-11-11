<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Campus;

class UsersController extends Controller
{
    public function profile()
    {
        $id=9;
    	$user = User::find($id);
		return view('profile',compact('user'));	
    }

    public function register()
    {
        $campuss = Campus::all();
        return view('register',compact('campuss'));	
    }
    // public function event($id){
    // 	$event = Event::find($id);
    // 	return view('event',compact('event'));
    // }
}
