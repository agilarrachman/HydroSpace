<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!Auth::check()) {
            return redirect('/masuk')->with('error', 'Harap login terlebih dahulu!');
        }

        $userRole = Auth::user()->role;
        $currentPath = $request->path();

        if ($userRole === 'Admin') {
            // Pastikan admin hanya bisa mengakses "/dashboard/*"
            if (!str_starts_with($currentPath, 'dashboard')) {
                abort(403, 'Anda tidak memiliki akses ke halaman ini.');
            }
        }

        if (Auth::user()->role !== $role) {
            return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        return $next($request);
    }
}
