<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Berita\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index() {
        $data = Berita::orderBy('id','desc')->paginate(6);
        return view('frontend.pages.berita',compact('data'));
    }
}
