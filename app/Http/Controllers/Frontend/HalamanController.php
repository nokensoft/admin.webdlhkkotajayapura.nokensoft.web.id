<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Halaman;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index($slug){

        $data = Halaman::where('slug',$slug)->first();
        return view('frontend.pages.index',[
            'data' => $data,
            'name' => $slug
        ]);
    }
}
