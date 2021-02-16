<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class CheckAdmin
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
        $username = $request->session()->get('username');
        $data = User::where('username', $username)->get();
        if($data[0]['type'] == 'admin') {
            return $next($request);
        }
        else {
            $request->session()->flash('error-msg', 'Only admin can access this.');
            return redirect('/home');
        }
    }
}
