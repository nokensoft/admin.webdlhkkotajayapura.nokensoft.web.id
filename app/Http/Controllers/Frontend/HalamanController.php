<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Halaman;
use App\Http\Controllers\Controller;

class HalamanController extends Controller
{

    // INDEX 
    public function index() {
        // 
    }

    // SHOW
    public function show($slug)
    {

        $data = Halaman::where('slug', $slug)->first();

        return view('frontend.pages.halaman.show', ['data' => $data]);
    }
}
