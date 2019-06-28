<?php

namespace App\Http\Middleware;

use App\PageView;
use Closure;

class PageViews
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
        PageView::where('id', 1)->increment('counter', 1);
        
        return $next($request);
    }
}
