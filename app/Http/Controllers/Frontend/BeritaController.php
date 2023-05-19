<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Berita\Berita;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{  

    // INDEX 
    public function index() {
        // 
    }

    // SHOW
    public function show($slug) {
        $data = Berita::where('slug', $slug)->first();
        return  view('frontend.pages.berita.show', compact('data'));
    }

}
