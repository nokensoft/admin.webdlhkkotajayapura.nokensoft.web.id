<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Halaman;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PengajuanPertanyaan;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

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
