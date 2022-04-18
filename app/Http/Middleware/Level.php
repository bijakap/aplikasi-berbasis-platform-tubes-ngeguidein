<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Redirect;

class Level
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        if (in_array($request->user()->level, $levels)){
            return $next($request);
        }
        
        if (Auth::user()->level == 'admin'){
            return Redirect::to('/');
        }else if (Auth::user()->level == 'user'){
            return Redirect::to('/');
        }elseif  (Auth::user()->level == 'guest'){
            return Redirect::to('/');
        }

        return $next($request);
    }
}