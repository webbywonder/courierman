<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CheckUserLogin {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (Auth::user() != null) {
            return redirect()->back();
        } elseif (!empty(Auth::guard('admin')->user())) {
            return redirect()->back();
        } else {
            return $next($request);
        }
    }

}
