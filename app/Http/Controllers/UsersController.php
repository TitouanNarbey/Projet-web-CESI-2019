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

    public function postregister()
    {
        $lastname = request('inputName');
        $firstname = request('inputFirstname');
        $center = request('inputCenter');
        $email = request('inputEmail');
        $password = request('inputPassword');
        $confirmpassword = request('inputConfirmPassword');
        $checkbox = request('inputCheckbox');

        if ($checkbox)
        {
            if($password===$confirmpassword)
            {
                $user = new User();
                $user->last_name = $lastname;
                $user->first_name = $firstname;
                $user->id_campus = $center;
                $user->email = $email;
                $user->id_roles = 1;
                $user->id_images = 1;
                $user->password = bcrypt($password);
                $user->save();

                return view('login');

            }
            else
            {
                //error
            }
        }
        else
        {
            //error
        }
    }
    // public function event($id){
    // 	$event = Event::find($id);
    // 	return view('event',compact('event'));
    // }
}
