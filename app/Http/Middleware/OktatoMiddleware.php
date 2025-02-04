<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OktatoMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (session('szerepkor') !== 'oktato') {
            return redirect('/');
        }
        return $next($request);
    }
}
