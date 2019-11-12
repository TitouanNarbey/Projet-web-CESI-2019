<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        return view('login');
       
        /*if (Auth::attempt(['email' => $email, 'password' => $password])) 
        {
            // Authentication passed...
            $json = file_get_contents("http://localhost:3000/api/users");
            $parse = json_decode($json, true);
            var_dump($parse);
        } else {
            return view('login');
        }*/

    }
}
