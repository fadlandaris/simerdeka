<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kegiatanmbkm;
use App\Http\Controllers\kegiatannonmbkm;
use App\Models\Category;
use App\Models\Text;

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
Route::post('/login', [loginController::class, 'loginMahasiswa']);
Route::post('/login', [loginController::class, 'loginProdi']);
Route::post('/login', [loginController::class, 'loginDosen']);



Route::get('/logins', function () {
    return view('falselogin');
});

// halaman home
Route::get('/home', [Home::class, 'home']);
    

// halaman mbkm dan nionmbkm
Route::get('/kegiatan-nonmbkm', [kegiatannonmbkm::class, 'kegiatannonmbkm']);
Route::get( '/kegiatan-mbkm' , [kegiatanmbkm::class, 'kegiatanmbkm' ]);
    

// Route::middleware(['web'])->group(function () {
    
// })

//kegiatan non mbkm
// Route::prefix('/kegiatan-nonmbkm')->group(function () {
//     Route::get('', function () {
//         return view('kegiatan-nonmbkm',[
//             "title" => "LAPORAN AKHIR STUDI"
//         ]);
//     });
// });

//kegiatan mbkm
// Route::prefix('/kegiatan-mbkm')->group(function () {
//     Route::get('', function () {
//         return view('kegiatan-mbkm',[
//             "title" => "ASISTENSI MENGAJAR PENDIDIKAN"
//         ]);
//     });
// });

