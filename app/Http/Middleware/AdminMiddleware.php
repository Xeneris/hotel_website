<?php

namespace App\Http\Middleware;

use App\Http\Controllers\AuthManager;
use Auth;
use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
            if (Auth::check() && $request->user()->is_admin){
                return $next($request);
            } else {
                abort(403, 'User is not administrator');
            }
    }
}
