<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class JwtMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next) {
        if (!Session::has('MultihplicAuth')) {
            return redirect('/');
        } else {
            return $next($request);
        }
    }
}
