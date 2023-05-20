<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class adminmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //admin role== 1 ;user role== 0
        if(Auth::check()){
            if(Auth::user()->role == '1'){
             return $next($request);
             //return redirect('/admin/dashboard')->with('message','Acess Denied as your not Admin');
            }else{
                 return redirect('/home')->with('message','Acess Denied as your not Admin');
         }

        }else{
            return redirect('/login')->with('message','login to acess thr website');
    }
        return $next($request);
    }
}
