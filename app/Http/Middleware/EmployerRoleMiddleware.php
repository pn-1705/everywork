<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerRoleMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() == true){
            if (Auth::user()->id_nhomquyen == 1)
            {
                return $next($request);
            }else {
                return redirect()->route("employer.pages.home");
            }
        }
        return redirect()->route("employer.pages.home");
    }
}
