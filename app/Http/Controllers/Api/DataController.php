<?php

namespace App\Http\Controllers\Api;

use App\Models\Halaman;
use Illuminate\Http\Request;
use App\Models\Berita\Berita;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function getBerita(){

        return response()->json([
            'berita' => [
                "all"  => Berita::count(),
                "publish"  => Berita::where('status','Publish')->count(),
                "draft"  => Berita::where('status','Draft')->count(),
                "trash"  => Berita::onlyTrashed()->count(),
            ]
        ]);

    }

    public function getHalaman(){

        return response()->json([
            'halaman' => [
                "all"       => Halaman::count(),
                "publish"   => Halaman::where('status','Publish')->count(),
                "draft"     => Halaman::where('status','Draft')->count(),
                "trash"     => Halaman::onlyTrashed()->count(),
            ]
        ]);

    }

}
