<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
use App\Campus;
use Auth;

class UseradminController extends Controller
{
    function useradmin()
    {

        return view('useradmin');     
    }

    function readData()
    {
        $users = User::join('campus','campus.id','=','users.id_campus')
        ->selectRaw('campus.name as campus,
                    users.id,
                    users.first_name,
                    users.last_name,
                    users.email,
                    users.created_at'   
                    )
        ->get();

        return response($users);
    }

   
     
}
