<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
//        dd(isset(session("username")));
        if (Auth::check() == true) {

            if (Auth::user()->id_nhomquyen != 2) {
                return redirect()->route("admin.login");
            } else {
                return $next($request);
            }
        }
        return redirect()->route("admin.login");

    }
}
