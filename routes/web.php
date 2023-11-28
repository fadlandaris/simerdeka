<?php

use App\Http\Controllers\DataMahasiswaController;
use App\Models\Text;
use App\Models\Category;
use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kegiatanmbkm;
use App\Http\Controllers\kegiatannonmbkm;
use App\Http\Controllers\loginController;
use App\Http\Controllers\KegiatanController;
use App\Http\Middleware\MahasiswaMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/login', [loginController::class, 'logins']);
Route::post('/login', [loginController::class, 'login']);

Route::get('/logout', [loginController::class, 'logout']);


Route::get('/logins', function () {
    return view('falselogin');
});

// halaman home mahasiswa
Route::get('/home-mahasiswa', [Home::class, 'home']);
    

// halaman mbkm dan nionmbkm
Route::get('/kegiatan-nonmbkm', [kegiatannonmbkm::class, 'kegiatannonmbkm']);
Route::get( '/kegiatan-mbkm' , [kegiatanmbkm::class, 'kegiatanmbkm' ]);


// Routes prodi


Route::get('/kegiatan-prodi', function () {
    return view('kegiatanprodi-prodi');
});

Route::get('/kegiatanmerdeka-prodi', function () {
    return view('kegiatanmerdeka-prodi');
});

Route::get('/konversimatakuliah-prodi', function () {
    return view('konversi-prodi');
});

Route::get('/pendaftarkegiatan-prodi', [DataMahasiswaController::class, 'index']);

Route::get('/dosen-pa', function () {
    return view('dosen-pa');
});

Route::middleware(['mahasiswa'])->group(function () {
    // Rute-rute yang hanya dapat diakses oleh pengguna dengan role 2
    Route::post('/tambah-mahasiswa', [DataMahasiswaController::class, 'tambahMahasiswa'])->name('tambahMahasiswa');
});






