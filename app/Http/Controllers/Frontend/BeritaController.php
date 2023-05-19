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

    // CATEGORY
    public function kategori($kategori) {
        
        $beritas = Berita::select('*')
                                    ->join(
                                        'kategori_beritas',
                                        'kategori_beritas.id', '=', 'beritas.category_id'
                                        )
                                    ->where('kategori_beritas.kategori_slug', $kategori)
                                    ->get();
                                    
        return  view('frontend.pages.berita.index', compact('beritas'));
    }

}
