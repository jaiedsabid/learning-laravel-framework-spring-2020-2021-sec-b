<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SessionVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->has('username')) {
            return $next($request);
        }
        else {
            $request->session()->flash('error-msg', 'Unauthorized access!');
            return redirect('/login');
        }
    }
}
