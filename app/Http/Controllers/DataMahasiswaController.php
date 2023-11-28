<?php

namespace App\Http\Controllers;

use App\Models\dataMahasiswa;
use App\Http\Requests\StoredataMahasiswaRequest;
use App\Http\Requests\UpdatedataMahasiswaRequest;
use Illuminate\Http\Request;

class DataMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = dataMahasiswa::get();
        //dd($data);
        foreach($datas as $data ){
            switch ($data->progress){
                case 0:
                    $data['status'] = "Pengajuan belum disetujui";
                break;
                case 1:
                    $data['status'] = "Pengajuan Disetujui";
                break;
                case 2:
                    $data['status'] = "Sudah Menetapkan Dospem";
                break;
                case 3:
                    $data['status'] = "Sudah Melaporkan Nilai";
                break;
                case 4:
                    $data['status'] = "Sudah Konversi KRS";
                break;
                default:
                    $data['status'] = "kesalahan input data";
                }    
        }


        // dd($data);
        // if($data->progress === 0){
        //     $data['progress'] = 'Belum disetujui';
        // }
        
        
        return view ('pendaftar-prodi', [
            "mhs" => $datas
        ]);
         
            

        
    }

    public function tambahMahasiswa (Request $request) {
        //$inputData['nama_kegiatan'] = $request->get("jenis_kegiatan");
        $datas = dataMahasiswa::all();
        foreach($datas as $data){
            //dd($data->nama_kegiatan);
            if(session()->get('nama') === $data->nama && $request->get("jenis_kegiatan") === $data->nama_kegiatan){
                
                return redirect('/kegiatan-mbkm'); // popup messages tidka bisa menambah kegiatan
            }
        }
        $inputData = dataMahasiswa::create([
            'nama' => session()->get('nama'),
            'nama_kegiatan' => $request->get("jenis_kegiatan"),
            'nim'  => session()->get('username')
        ]);

        return redirect('/home-mahasiswa',302,[
            'msg' => 'berhasil menambahkan data', // popup berhasil menambahkan kegiatan
            'data' => $inputData,
        ]);
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoredataMahasiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(dataMahasiswa $dataMahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dataMahasiswa $dataMahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedataMahasiswaRequest $request, dataMahasiswa $dataMahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dataMahasiswa $dataMahasiswa)
    {
        //
    }
}
