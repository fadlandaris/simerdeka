<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Text;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\StoreTextRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Requests\UpdateTextRequest;
use App\Models\dataMahasiswa;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class kegiatannonmbkm extends Controller
{
    
    public function kegiatannonmbkm()
    {
        // dd(session()->all()); 
        $url =  env('API_SIAKAD') . "/api/as400/dataMahasiswa/" . session('username') . '/' . session('token') ;
        // dd($url);
        $test = json_decode(Http::get($url));
        // dd($test->isi[0]);
        $kegiatanprodi = Kegiatan::where('jenis_kegiatan', 1)->get('kegiatan');
        $dataMahasiswa = dataMahasiswa::where('nama',session()->get('nama'))->get();


        // $nama = $test->isi[0]->nama; 
        // $kode = $test->isi[0]->kodeProdi;

        // dd($kode);

        return view('kegiatan-nonmbkm', [
            "title" => "Kegiatan non-MBKM",
            "kegiatanprodi" => $kegiatanprodi,
            "data" => $test,
            "nama" => $test->isi[0]->namaLengkap,
            "alamat" => $test->isi[0]->alamat,
            "email" => $test->isi[0]->email,
            "nomorHp" => $test->isi[0]->telp,
            "prodi" => $test->isi[0]->namaProdi,
            "jenjang" => $test->isi[0]->jenjangProdi,
            "fakultas" => $test->isi[0]->namaFakultas,
            "datamahasiswa" => $dataMahasiswa,
            
             
            
            
        ]);

    }

    public function getKegiatan(){
        $kegiatan = Kegiatan::get();
        return response()->json([
            'kegiatan' => $kegiatan
        ]);
    }

    // public function (Request $request)
    // {
    //     $url = env('API_SIAKAD') . "/api/as400/dataMahasiswa/:nim/:token";

    //     $res = json_decode($response);
    //     session([



    //     ])

    //     return redirect(/)->with({
    //         "data" => $data
    //         })



    // }


}
