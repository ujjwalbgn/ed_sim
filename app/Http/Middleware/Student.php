<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Student
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
        if (Auth::check() && Auth::user()->role == 'student') {
            return redirect('/sim');
        }
        elseif (Auth::check() && Auth::user()->role == 'instructor') {
            return redirect('/patient');
        }
        else {
            return redirect('/');
        }
    }
}
