<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Staff
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */


     public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->user_type ==  2  || auth()->check() && auth()->user()->user_type ==  1) {
            return $next($request);
        } else {
            return redirect()->route('home');
        }
    }
}
