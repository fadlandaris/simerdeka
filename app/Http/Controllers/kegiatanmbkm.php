<?php

namespace App\Http\Controllers;

use App\Models\Text;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\StoreTextRequest;
use App\Http\Requests\UpdateTextRequest;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class kegiatanmbkm extends Controller
{
    // public function show(kegiatanmbkm $post)
    // {
    //     return view('kegiatan-mbkm',[
    //         "title" => "Kegiatan MBKM",
    //         "category" => $post
    //     ]);

    // }

    public function kegiatanmbkm()
    {
        // dd(session()->all()); 
        $url =  env('API_SIAKAD') . "/api/as400/dataMahasiswa/" . session('username') . '/' . session('token') ;
        // dd($url);
        $test = json_decode(Http::get($url));
        // dd($test->isi[0]);

        // $nama = $test->isi[0]->nama;
        // $kode = $test->isi[0]->kodeProdi;

        // dd($kode);
        
        return view('kegiatan-mbkm',[
            "title" => "Kegiatan MBKM",
            "post" => Text::all(),
            "data" => $test,
            "nama" => $test->isi[0]->namaLengkap,
            "alamat" => $test->isi[0]->alamat,
            "email" => $test->isi[0]->email,
            "nomorHp" => $test->isi[0]->telp,
            "provinsi" => $test->isi[0]->namaPropinsi,
            "kota" => $test->isi[0]->namaKabkot,
            "lurah" => $test->isi[0]->lurah,
            "pos" => $test->isi[0]->kdpos,
        ]);

    }

}
