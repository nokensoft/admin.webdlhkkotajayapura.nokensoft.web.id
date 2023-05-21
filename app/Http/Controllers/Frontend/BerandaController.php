<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// MODELS
use App\Models\Berita\Berita;
use App\Models\LinkTerkait;
use App\Models\LayananOnline;
use App\Models\InformasiLingkungan;
use App\Models\Faq;

class BerandaController extends Controller
{

    // INDEX 
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

        return  view('frontend.index', 
                    compact(
                        'beritas', 
                        'linkTerkaits', 
                        'layananOnlines', 
                        'informasiLingkungans', 
                        'faqs'
                    )
                );

    }
}
