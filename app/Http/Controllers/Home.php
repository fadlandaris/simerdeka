<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Text;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\StoreTextRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Requests\UpdateTextRequest;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function home()
    {

        // dd(session()->all());    
        return view('home', [
            
        ]);
        
    }

    public function show(Home $post)
    {
        return view ('home',[
            "post" => $post
        ]);
    }
    
    
    
    // Route::get('/home', function () {
    //     return view('home');
        
    // });
}
