<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MahasiswaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // dd(session()->get('mode'));
    // Periksa apakah pengguna memiliki role 9 Mahasiswa
    if (session()->get('mode') === "9") {
        return $next($request);
    }

    return abort(403); // Atau arahkan ke halaman lain atau tampilkan pesan akses ditolak
    }  
}
