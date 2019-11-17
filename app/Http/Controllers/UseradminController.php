<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
use App\Campus;
use App\Role;
use Auth;



class UseradminController extends Controller
{
    function useradmin()
    {
        $roles = Role::all();
        return view('useradmin', compact('roles'));     
    }

    function readData()
    {
        
        $users = User::join('campus','campus.id','=','users.id_campus')
        ->join('roles','roles.id','=','users.id_roles')
        ->selectRaw('campus.name as campus,
                    roles.name as roles,
                    users.id_roles,
                    users.id,
                    users.first_name,
                    users.last_name,
                    users.email,
                    users.created_at'
                    )
        ->get();

        // return response($users);
        return view('userlist', compact('users'));
    }

    function edit(Request $request)
    {
        

        if($request->ajax())
        {
            $user = User::find($request->id);
            return response($user);
        }
    }

    function update(Request $request)
    {

        if($request->ajax())
        {
            $role = request('role_id');

            $user = User::find($request->id);
            $user->id_roles = $role;
            $user->update();
            return response($request->all());
        }
    }

   
     
}
