<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Halaman;
use App\Http\Controllers\Controller;

class HalamanController extends Controller
{

    // INDEX 
    public function index()
    {
        $halamans = Halaman::orderBy('judul', 'asc')->get();
        
        return view('frontend.pages.halaman.index', compact('halamans'));
    }

    // SHOW
    public function show($slug)
    {
        $halaman = Halaman::where('slug', $slug)
                            ->where('status', 'publish')
                            ->first();

        return view('frontend.pages.halaman.show', compact('halaman'));
    }
}
