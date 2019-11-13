<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use App\User;
use App\Campus;
use Auth;

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
        request()->validate
            ([
                
                'inputName' =>'required',
                'inputFirstname' =>'required',
                'inputEmail' =>'required',
                'inputPassword' =>'required'
                
            ]);
            
        $lastname = request('inputName');
        $firstname = request('inputFirstname');
        $center = request('inputCenter');
        $email = request('inputEmail');
        $password = request('inputPassword');
        $confirmpassword = request('inputConfirmPassword');
        $checkbox = request('inputCheckbox');

        if ($checkbox) //Verify if it was agreed
        {   if(preg_match('`[A-Z]`',$password) && preg_match('`[0-9]`',$password)) //Verification to check if there's at least an uppercase and a number
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
                    
                }
            }
        }
        else
        {
            //error
        }
    }

    public function showlogin()
    {
        return view('login');	
    }

    public function postlogin()
    {
        ([
            'inputEmail' =>'required',
            'inputPassword' =>'required'
            
        ]);

        $email = request('inputEmail');
        $password = request('inputPassword');	

        //return view('login');
        $urlToRequest = "http://10.169.129.14:3000/api/login/";
        $urlToRequest .= $email;

        $json = file_get_contents($urlToRequest);
        $parse = json_decode($json, true);

        $mdp = $parse["user"][0]["password"];

        if(Hash::check($password, $mdp))
        {
            //Session::push('user.token', $parse["token"][0]);
            Session::put('id', $parse["user"][0]["id"]);
            Session::put('last_name', $parse["user"][0]["last_name"]);
            Session::put('first_name', $parse["user"][0]["first_name"]);
            Session::put('email', $parse["user"][0]["email"]);
            Session::put('id_campus', $parse["user"][0]["id_campus"]);
            Session::put('id_roles', $parse["user"][0]["id_roles"]);
            Session::put('id_images', $parse["user"][0]["id_images"]);
            Session::put('token', $parse["token"]);

            return view('/home');
        }
        else
        {
            echo ("mauvais password :(");
        }


        /*if (Auth::attempt(['email' => $email, 'password' => $password])) 
        {
            // Authentication passed...

            $json = file_get_contents("http://10.169.129.14:3000/api/users");
            $parse = json_decode($json, true);
            var_dump($parse);
        } else {
            return view('login');
        }*/
    }
}
