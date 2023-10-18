<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() == true){
            if (Auth::user()->id_nhomquyen == 0)
            {
                return $next($request);
            }else {
                return redirect()->route("user.pages.home");
            }
        }
    }
}
