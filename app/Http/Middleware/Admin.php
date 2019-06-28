<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Admin
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
        if (Auth::check()) {
           if(Auth::user()->isAdmin())
           {
              return $next($request);
           }

        }
        
        Session::flash('not_admin', 'Таньд энэ хуудас руу хандах эрх байхгүй байна');

        return redirect()->back();
        
    }
}
