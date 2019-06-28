<?php

namespace App\Http\Middleware;

use App\PageView;
use Closure;

class PostViews
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
        PageView::where('id', 2)->increment('counter', 1);        
        
        return $next($request);
    }
}
