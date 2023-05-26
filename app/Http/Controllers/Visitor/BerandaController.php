<?php

namespace App\Http\Controllers\Visitor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// MODELS
use App\Models\Berita\Berita;
use App\Models\Berita\KategoriBerita;
use App\Models\Halaman;
use App\Models\Banner;

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
        
        // data layanan online di halaman beranda
        $layananOnlines = LayananOnline::orderBy('id','asc')->where('status','publish')->paginate();
        
        // data informasi lingkungan di halaman beranda
        $informasiLingkungans = InformasiLingkungan::orderBy('id','asc')->where('status','publish')->paginate();
        
        // data faq di halaman beranda
        $faqs = Faq::orderBy('id','desc')->where('status','publish')->paginate();
        
        // data link terkait di halaman beranda
        $linkTerkaits = LinkTerkait::orderBy('id','desc')->where('status','publish')->paginate();

        // data banner
        $banner_1 = Banner::whereId(1)->first();
        $banner_2 = Banner::whereId(2)->first();
        $banner_3 = Banner::whereId(3)->first();

        return  view('visitor.index', 
                    compact(
                        'beritas', 
                        'layananOnlines', 
                        'informasiLingkungans', 
                        'faqs',
                        'linkTerkaits', 
                        'banner_1',
                        'banner_2',
                        'banner_3',
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
        
        // data link terkait di halaman beranda
        $linkTerkaits = LinkTerkait::orderBy('id','desc')->where('status','publish')->paginate();

        // data banner
        $banner_1 = Banner::whereId(1)->first();
        $banner_2 = Banner::whereId(2)->first();
        $banner_3 = Banner::whereId(3)->first();

        return  view('visitor.pages.berita.index', 
                    compact(
                            'datas', 
                            'kategoris', 
                            'pageTitle',
                            'linkTerkaits',
                            'banner_1',
                            'banner_2',
                            'banner_3',
                            )
                    );
    }

    // BERITA > SHOW
    public function beritaShow($slug) {
        $data = Berita::where('slug', $slug)->first();
        
        // data link terkait di halaman beranda
        $linkTerkaits = LinkTerkait::orderBy('id','desc')->where('status','publish')->paginate();

        // data banner
        $banner_1 = Banner::whereId(1)->first();
        $banner_2 = Banner::whereId(2)->first();
        $banner_3 = Banner::whereId(3)->first();

        return  view('visitor.pages.berita.show', 
                    compact(
                        'data',
                        'linkTerkaits',
                        'banner_1',
                        'banner_2',
                        'banner_3',
                        )
                    );
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
        $pageTitle = 'Berita';
        
        // data link terkait di halaman beranda
        $linkTerkaits = LinkTerkait::orderBy('id','desc')->where('status','publish')->paginate();

        // data banner
        $banner_1 = Banner::whereId(1)->first();
        $banner_2 = Banner::whereId(2)->first();
        $banner_3 = Banner::whereId(3)->first();
                                    
        return  view('visitor.pages.berita.index', 
                        compact(
                            'datas', 
                            'kategoris', 
                            'pageTitle',
                            'linkTerkaits',
                            'banner_1',
                            'banner_2',
                            'banner_3',
                        )
                    );
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
        
        // data link terkait di halaman beranda
        $linkTerkaits = LinkTerkait::orderBy('id','desc')->where('status','publish')->paginate();

        // data banner
        $banner_1 = Banner::whereId(1)->first();
        $banner_2 = Banner::whereId(2)->first();
        $banner_3 = Banner::whereId(3)->first();
        
        return view('visitor.pages.halaman.index', 
                    compact(
                        'halamans',
                        'linkTerkaits',
                        'banner_1',
                        'banner_2',
                        'banner_3',
                        )
                    );
    }

    // HALAMAN > SHOW
    public function halamanShow($slug)
    {
        $halaman = Halaman::where('slug', $slug)
                            ->where('status', 'publish')
                            ->first();
        
        // data link terkait di halaman beranda
        $linkTerkaits = LinkTerkait::orderBy('id','desc')->where('status','publish')->paginate();

        // data banner
        $banner_1 = Banner::whereId(1)->first();
        $banner_2 = Banner::whereId(2)->first();
        $banner_3 = Banner::whereId(3)->first();

        return view('visitor.pages.halaman.show', 
        compact(
            'halaman',
            'linkTerkaits',
            'banner_1',
            'banner_2',
            'banner_3',
            )
        );
    }

    // KONTAK
    public function kontak(){
        
        // data link terkait di halaman beranda
        $linkTerkaits = LinkTerkait::orderBy('id','desc')->where('status','publish')->paginate();

        // data banner
        $banner_1 = Banner::whereId(1)->first();
        $banner_2 = Banner::whereId(2)->first();
        $banner_3 = Banner::whereId(3)->first();

        return view('visitor.pages.kontak', 
        compact(
            'linkTerkaits',
            'banner_1',
            'banner_2',
            'banner_3',
            )
        );
    }


}
