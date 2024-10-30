<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('admin.login')->with('error', 'Please log in to access this page.');
        }

        // Retrieve authenticated user
        $user = Auth::user();

        if ($user->role !== $role) {
            return redirect()->route('admin.login')->with('error', 'You do not have permission to access this page.');
        }

        return $next($request); 
    }

    // public function handle(Request $request, Closure $next, ...$role): Response
    // {
    //     if (!Auth::check()) {
    //         return redirect()->route('admin.login')->with('error', 'Please log in to access this page.');
    //     }

    //     $user = Auth::user();

    //      if (!in_array($user->role, $roles)) {
    //         return redirect()->route('admin.login')->with('error', 'You do not have permission to access this page.');
    //     }

    //     return $next($request); 
    // }
}
