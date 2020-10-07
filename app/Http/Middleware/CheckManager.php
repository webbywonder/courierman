<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckManager {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (!empty(Auth::user())) {
            if (Auth::user()->type === "Manager") {
                return $next($request);
            } else {
                Auth::logout();
                return redirect()->intended('manager')->with('error', 'You are not allowed to visit this page...');
            }
        } else {
            Auth::logout();
            return redirect()->intended('manager')->with('error', 'You are not allowed to visit this page...');
        }
    }

}
