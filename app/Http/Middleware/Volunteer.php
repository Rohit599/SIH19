<?php

namespace App\Http\Middleware;

use Closure;

class Volunteer
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
        if (auth()->user()->is_admin == 3) {
            return $next($request);
        } else {
            return route('login');
        }
    }
}
