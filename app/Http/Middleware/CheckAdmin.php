<?php

namespace App\Http\Middleware;

use Closure;
use Auth;//Ajouté
use App\User;//Ajouté
use Session;//Ajouté

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        $user = Auth::user()->id;//$user = User::find(1);
        $cur_user = User::find($user);
        if($cur_user->id_roles<>2){
            return redirect('/');
        }
           return $next($request);
    }

     
}








        