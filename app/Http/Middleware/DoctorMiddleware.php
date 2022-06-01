<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class DoctorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()) {
         
            if(Auth::user()->role == 'doctor') {
                return $next($request);
            } else
                return redirect('/home')->with('warning', 'Access Denied as you are not doctor!');
        } else {
           return redirect('/login')->with('warning', 'Login to access the website info');
        }
        return $next($request);   
    }
}
