<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    // /**
    //  * Handle an incoming request.
    //  *
    //  * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
    //  */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }

    public function handle($request, Closure $next)
    {
    // Periksa apakah pengguna memiliki role 2
    if (auth()->check() && auth()->user()->role === 2) {
        return $next($request);
    }

    return abort(403); // Atau arahkan ke halaman lain atau tampilkan pesan akses ditolak
    }   
}
