<?php

namespace App\Http\Controllers\Visitor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// MODELS
use App\Models\Berita\Berita;
use App\Models\Berita\KategoriBerita;
use App\Models\Halaman;

use App\Models\LinkTerkait;
use App\Models\LayananOnline;
use App\Models\InformasiLingkungan;
use App\Models\Faq;

class BerandaController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | INDEX / BERANDA
    | - beritas
    | - linkTerkaits
    | - layananOnlines
    | - informasiLingkungans
    | - faqs
    |--------------------------------------------------------------------------
    */     
    
    public function index() {
        
        // data berita di halaman beranda
        $beritas = Berita::orderBy('id','desc')->where('status','publish')->paginate(6);
        
        // data link terkait di halaman beranda
        $linkTerkaits = LinkTerkait::orderBy('id','desc')->where('status','publish')->paginate();
        
        // data layanan online di halaman beranda
        $layananOnlines = LayananOnline::orderBy('id','desc')->where('status','publish')->paginate();
        
        // data informasi lingkungan di halaman beranda
        $informasiLingkungans = InformasiLingkungan::orderBy('id','desc')->where('status','publish')->paginate();
        
        // data faq di halaman beranda
        $faqs = Faq::orderBy('id','desc')->where('status','publish')->paginate();

        return  view('visitor.index', 
                    compact(
                        'beritas', 
                        'linkTerkaits', 
                        'layananOnlines', 
                        'informasiLingkungans', 
                        'faqs'
                    )
                );

    }

    /*
    |--------------------------------------------------------------------------
    | BERITA
    | - index
    | - show
    | - category
    |--------------------------------------------------------------------------
    */ 

    // BERITA > INDEX
    public function beritaIndex() {
        $datas = Berita::where('status', 'publish')->paginate(2);
        $kategoris = KategoriBerita::where('status', 'publish')->paginate(6);
        $pageTitle = 'Berita';

        return  view('visitor.pages.berita.index', compact('datas', 'kategoris', 'pageTitle'));
    }

    // BERITA > SHOW
    public function beritaShow($slug) {
        $data = Berita::where('slug', $slug)->first();
        return  view('visitor.pages.berita.show', compact('data'));
    }

    // BERITA > CATEGORY
    public function beritaKategori($kategori) {
        
        $datas = Berita::select('*')
                                    ->join(
                                        'kategori_beritas',
                                        'kategori_beritas.id', '=', 'beritas.category_id'
                                        )
                                    ->where('kategori_beritas.kategori_slug', $kategori)
                                    ->paginate(1);
        $kategoris = KategoriBerita::where('status', 'publish')->paginate(6);
                                    
        return  view('visitor.pages.berita.index', compact('datas', 'kategoris'));
    }

    /*
    |--------------------------------------------------------------------------
    | HALAMAN
    | - index
    | - show
    |--------------------------------------------------------------------------
    */ 

    // HALAMAN > INDEX
    public function halamanIndex()
    {
        $halamans = Halaman::orderBy('judul_halaman', 'asc')->get();
        
        return view('visitor.pages.halaman.index', compact('halamans'));
    }

    // HALAMAN > SHOW
    public function halamanShow($slug)
    {
        $halaman = Halaman::where('slug', $slug)
                            ->where('status', 'publish')
                            ->first();

        return view('visitor.pages.halaman.show', compact('halaman'));
    }


}