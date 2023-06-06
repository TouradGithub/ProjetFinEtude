<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class Authweb
{

    public function handle(Request $request, Closure $next)
    {
        if (!auth::user() || auth::user()->is_admin !=1 ) {
            return redirect()->back();
        }
        return $next($request);
    }
}
