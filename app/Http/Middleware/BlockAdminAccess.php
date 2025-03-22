<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class BlockAdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Jika pengguna adalah admin, redirect ke dashboard
        if (Auth::check() && Auth::user()->role === 'Admin') {
            return redirect('/dashboard')->with('error', 'Admin tidak dapat mengakses halaman pelanggan.');
        }

        return $next($request);
    }
}
