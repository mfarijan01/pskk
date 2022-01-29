<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if(Auth::guard($guard)->check()){
            if(Auth::user()->level == 'Admin'){
                return redirect('/home');
            }elseif(Auth::user()->level == 'User'){
                return redirect('/user');
            }else{
                return redirect('/login');
            }
        }

        return $next($request);
    }
}
