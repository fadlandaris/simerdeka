<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function logins(){
        return view('login');
    }
    
     public function login(Request $request)
    {
        
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required']
        ]);
        
        // $url = env('API_SIAKAD') . "/api/as400/dataMahasiswa/:nim/:token";
        $url = env('API_SIAKAD') . "/api/as400/signin/";
        $response = Http::asForm()->post($url, $credentials);

        // dd($response->status());

        // jika berhasil login
        if($response->status() == 200){
            // dd("Berhasil login coy");
            $res = json_decode($response);
            // dd($res);
            session([
                "username" => $res->username,
                "token" => $res->Authorization,
                "kelamin" => $res->kelamin,
                "nama" => $res->nama,
                "mode" => $res->mode,
                
                
            ]);

            // dd(session()->all());    

            $username = session()->get('username');
            $mode = session()->get('mode');
            // $token = session()->get('token');

            if ($mode === '9'){
                return redirect ('/home-mahasiswa');
            } else if ($mode === '2'){
                return redirect ('/kegiatan-prodi');
            } else if ($mode === '8'){
                return redirect ('/dosen-pa');
            } else if ($mode === 'none');
            
            

          
            
        } 
        
        // jika gagal
        return redirect('/logins');

        
    }

};   