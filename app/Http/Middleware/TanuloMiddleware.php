<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TanuloMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (session('szerepkor') !== 'tanulo') {
            return redirect('/');
        }
        return $next($request);
    }
}
