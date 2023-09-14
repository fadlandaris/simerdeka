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
    
     public function loginMahasiswa(Request $request)
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
                // "email" => $res->email
                
            ]);

            // dd(session()->all());    

            $username = session()->get('username');
            // $token = session()->get('token');


            
            // $url = env('API_SIAKAD') . "/api/as400/dataMahasiswa/" . $username . "/" . $token;
            // $response = Http::get($url);

            return redirect('/home');
        } 
        
        // jika gagal
        return redirect('/logins');

        
    }

    public function loginProdi(Request $request){

        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string']
        ]);


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
                // "email" => $res->email
                
            ]);

            // dd(session()->all());    

            $username = session()->get('username');
            // $token = session()->get('token');


            
            // $url = env('API_SIAKAD') . "/api/as400/dataMahasiswa/" . $username . "/" . $token;
            // $response = Http::get($url);

            return redirect('/home');
        } 
        
        // jika gagal
        return redirect('/logins');

        
    }

    public function loginDosen(Request $request){

        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string']
        ]);


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
                // "email" => $res->email
                
            ]);

            // dd(session()->all());    

            $username = session()->get('username');
            // $token = session()->get('token');


            
            // $url = env('API_SIAKAD') . "/api/as400/dataMahasiswa/" . $username . "/" . $token;
            // $response = Http::get($url);

            return redirect('/home');
        } 
        
        // jika gagal
        return redirect('/logins');

        
    }
    
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
