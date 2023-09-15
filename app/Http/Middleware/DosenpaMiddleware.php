<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DosenpaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
    // Periksa apakah pengguna memiliki role 8 Mahasiswa
    if (auth()->check() && auth()->user()->role === 8) {
        return $next($request);
    }

    return abort(403); // Atau arahkan ke halaman lain atau tampilkan pesan akses ditolak
    }  
}
