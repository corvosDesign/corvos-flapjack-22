<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;


class HasAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
                        return redirect()->route('login');
                    }

                    if (Auth::user()->hasAuth == 42) {
                        return $next($request);
                    }

                    if (Auth::user()->hasAuth !== 42) {

                    return redirect()->route('client');


            }
        }

}
