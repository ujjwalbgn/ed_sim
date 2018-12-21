<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Instructor
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
        if (Auth::check() && Auth::user()->role == 'instructor') {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 'staff') {
            return redirect('/sim');
        }
        else {
            return redirect('/');
        }
    }
}
