<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{


   /* public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/');
        }
        $user = Auth::user()->id_roles;//$user = User::find(1);
        $cur_user = User::find($user);
        if($cur_user->level<>2){
            return redirect('/');
        }
        return $next($request);
    }*/
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

     
}

   



