<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Jeniskegiatan;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreKegiatanRequest;
use App\Http\Requests\UpdateKegiatanRequest;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function prodi()
    {
        $kegiatanProdi = Kegiatan::where('jenis_kegiatan', 1)->get();
        return response()->json($kegiatanProdi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function mbkm()
    {
        $kegiatanMBKM = Kegiatan::where('jenis_kegiatan', 2)->get();
        return response()->json($kegiatanMBKM);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKegiatanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKegiatanRequest $request, Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        //
    }
}
