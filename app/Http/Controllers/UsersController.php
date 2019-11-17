<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use App\User;
use App\Campus;
use App\Report;
use Auth;

/*
*Controller of all the features related to the user
*/
class UsersController extends Controller
{
    /*
    *show the profile of the user
    */
    public function profile()
    {
        if(Auth::user() !== null)
        {
            $id = Auth::user()->id;
            $user = User::find($id);

            if(Auth::user()->id_roles == 2)
            {
                $reports = Report::all();
                $todeliver = Order()::where('paid', '1')->where('delivered', '0')->get();

                return view('profile',compact('user'))->with('reports', $reports)->with('todeliver', $todeliver);
            }
            else
            {
                return view('profile',compact('user'));
            }
        }
        else
        {
            return redirect('/home')->with('messageRed', 'Vous n\'avez pas de profile.');
        }
    }

    /*
    *show the register form
    */
    public function register()
    {
        $campuss = Campus::all();
        return view('register',compact('campuss'));	
    }

    /*
    *register the new user in the database
    */
    public function postregister()
    {
        request()->validate
            ([
                
                'inputName' =>'required',
                'inputFirstname' =>'required',
                'inputEmail' =>'required',
                'inputPassword' =>'required',
                'inputConfirmPassword' =>'required'
                
            ]);
            
        $lastname = request('inputName');
        $firstname = request('inputFirstname');
        $center = request('inputCenter');
        $email = request('inputEmail');
        $password = request('inputPassword');
        $confirmpassword = request('inputConfirmPassword');
        $checkbox = request('inputCheckbox');

        //Verify if the user agreed to the legal conditions
        if ($checkbox) 
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
                    return redirect('register')->with('messageRed', 'La confirmation du mot de passe ne correspond pas au mot de passe entré.');
                }
            }
            else
            {
                return redirect('register')->with('messageRed', 'Le mot de passe doit contenir au moins une majuscule et un chiffre.');
            }
        }
        else
        {
            return redirect('register')->with('messageRed', 'Vous devez accepter les conditions d\'utilisation.');
        }
    }

    /*
    *show the login form
    */
    public function showlogin()
    {
        return view('login');	
    }

    /*
    *allow the user to login through the Node.js API
    */
    public function postlogin()
    {
        request()->validate
        ([
            'inputEmail' =>'required',
            'inputPassword' =>'required'
        ]);

        $email = request('inputEmail');
        $password = request('inputPassword');

        $urlToRequest = 'http://localhost:3000/api/login/';
        $urlToRequest .= $email;

        //add a token in the header which will be used as a verification in the API
        $context = stream_context_create(array(
            'http' => array(
                'header' => "Authorization: 9cb986477ea6b412e1571fa18fafd210830399d8762fa87448440950221df1c6",
            ),
        ));

        $json = file_get_contents($urlToRequest, false, $context);
        $parse = json_decode($json, true);

        //verification of the email and the password
        if($parse["reqError"] == '' && Hash::check($password, $parse["user"][0]["password"]))
        {
            $user= User::find($parse["user"][0]["id"]);

            Auth::login($user);

            return redirect('/home');
        }
        else
        {
            return redirect('/login')->with('messageRed', 'Les champs ne correspondent pas.');
        }
    }

    /*
    *diconnect the user
    */
    public function disconnect()
    {
        if(Auth::user() !== null)
        {
            Auth::logout();
            return redirect('/home')->with('messageGreen', 'Déconnexion réussie');
        }
        else
        {
            return redirect('/home')->with('messageRed', 'Vous n\'avez pas de compte.');
        }
    }

    /*
    *accept the cookies
    */
    public function acceptCookies()
    {
        Session::put('AcceptCookies', 1);
        return back();
    }
}