<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class StatisztikaMegtekintoMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        
        if (!Auth::check() || !(Auth::user()->role <3)) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        return $next($request);
    }
}