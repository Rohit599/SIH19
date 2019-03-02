<?php

namespace App\Http\Middleware;

use Closure;

class SubAdmin
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
        if (auth()->user()->is_admin == 2) {
            return $next($request);
        } else {
            return route('login');
        }
    }
}
