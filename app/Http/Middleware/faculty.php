<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class faculty
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

        // Allow only faculty (role 1)
        if ($userRole == 1) {
            return $next($request);
        }

        // Redirect students to their dashboard
        if ($userRole == 2) {
            return redirect()->route('student');
        }

        // Default fallback redirection if no role matches
        return redirect()->route('login');
    }
}
