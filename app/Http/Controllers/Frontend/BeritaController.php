<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Berita\Berita;
use App\Models\Berita\KategoriBerita;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{  

    // INDEX 
    public function index() {
        $datas = Berita::where('status', 'publish')->paginate(2);
        $kategoris = KategoriBerita::where('status', 'publish')->paginate(6);
        $pageTitle = 'Berita';

        return  view('frontend.pages.berita.index', compact('datas', 'kategoris', 'pageTitle'));
    }

    // SHOW
    public function show($slug) {
        $data = Berita::where('slug', $slug)->first();
        return  view('frontend.pages.berita.show', compact('data'));
    }

    // CATEGORY
    public function kategori($kategori) {
        
        $datas = Berita::select('*')
                                    ->join(
                                        'kategori_beritas',
                                        'kategori_beritas.id', '=', 'beritas.category_id'
                                        )
                                    ->where('kategori_beritas.kategori_slug', $kategori)
                                    ->paginate(1);
        $kategoris = KategoriBerita::where('status', 'publish')->paginate(6);
                                    
        return  view('frontend.pages.berita.index', compact('datas', 'kategoris'));
    }

}
