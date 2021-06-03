<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class superadmin
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
        if(Auth::guard('superadmin')->check()||Auth::guard('bank')->check()||Auth::guard('admin')->check())
        {
            return $next($request);
        }

    }
}
