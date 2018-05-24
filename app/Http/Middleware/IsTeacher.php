<?php

namespace App\Http\Middleware;

use Closure;

class IsTeacher
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
        if(auth()->check() && $request->user()->permission_level == 0 || auth()->check() && $request->user()->permission_level == 2){
            return redirect()->guest('home');
        }
        return $next($request);
    }
}
