<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class normal
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userRole = Auth::user()->role;

        // Allow only students (role 2)
        if ($userRole == 2) {
            return $next($request);
        }

        // Redirect faculty to their dashboard
        if ($userRole == 1) {
            return redirect()->route('faculty');
        }

        // Default fallback redirection if no role matches
        return redirect()->route('login');
    }
}
