<?php

namespace App\Http\Controllers\Dasbor;

use App\Models\Halaman;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class HalamanController extends Controller
{
    // INDEX
    public function index()
    {
        $datas = Halaman::where([
            ['judul_halaman', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul_halaman', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','Publish')->latest()->paginate(10);

        $jumlahtrash    = Halaman::onlyTrashed()->count();

        $jumlahdraft    = Halaman::where('status', 'Draft')->count();
        $datapublish    = Halaman::where('status', 'Publish')->count();

        return view('dasbor.halaman.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // DRAFT
    public function draft()
    {
        $datas = Halaman::where([
            ['judul_halaman', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul_halaman', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','Draft')->latest()->paginate(10);

        $jumlahtrash    = Halaman::onlyTrashed()->count();

        $jumlahdraft    = Halaman::where('status', 'Draft')->count();
        $datapublish    = Halaman::where('status', 'Publish')->count();

        return view('dasbor.halaman.index',compact(
            'datas',
            'jumlahtrash',
            'jumlahdraft',
            'datapublish'
        )) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // CREATE
    public function create()
    {
        return view('dasbor.halaman.create');
    }

    // STORE
    public function store(Request $request)
    {
        $validator      = Validator::make(
            $request->all(),
            [
                'judul_halaman'             => 'required',
                'konten'                    => 'required',
                // 'gambar'                 => 'image|mimes:png,jpeg,jpg|max:4096',
                'status'                    => 'required',
            ],[
                'judul_halaman.required'    => 'Judul tidak boleh kosong',
                'konten.required'           => 'Konten tidak boleh kosong',
                // 'gambar.required'        => 'Gambar harus dengan jenis PNG,JPG,JPEG',
                'status.required'           => 'Status tidak boleh kosong',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = new Halaman();

                $data->judul_halaman      = $request->judul_halaman;
                $data->sub_judul          = $request->sub_judul;
                $data->konten             = $request->konten;
                $data->status             = $request->status;

                $data->slug = Str::slug($request->judul_halaman);

                if (isset($request->gambar)) {

                    $posterName = $data->slug . Str::random(10) . '.' . $request->gambar->extension();
                    $path = public_path('gambar/halaman');
                    if (!empty($data->gambar) && file_exists($path . '/' . $data->gambar)) :
                        unlink($path . '/' . $data->gambar);
                    endif;

                    $data->gambar = $posterName;

                    $request->gambar->move(public_path('gambar/halaman'), $posterName);
                }

                $data->save();
                Alert::toast('Halaman Berhasil dibuat!', 'success');
                if ($data->status == 'Publish') {
                    return redirect()->route('dasbor.halaman');
                } else {
                    return redirect()->route('dasbor.halaman.draft');
                }

            } catch (\Throwable $th) {

                Alert::toast('Gagal', 'error');

                return redirect()->back();
            }
        }
    }

    // SHOW
    public function show($slug)
    {
        $data = Halaman::where('slug',$slug)->first();
        return view('dasbor.halaman.show',compact('data'));
    }

    // EDIT
    public function edit($slug)
    {
        $data = Halaman::where('slug',$slug)->first();
        return view('dasbor.halaman.edit',compact('data'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul_halaman'             => 'required',
                'konten'                    => 'required',
                // 'gambar'                    => 'image|mimes:png,jpeg,jpg|max:4096',
                'status'                    => 'required',
            ],[
                'judul_halaman.required'    => 'judul_halaman halaman tidak boleh kosong',
                'konten.required'           => 'Konten halaman tidak boleh kosong',
                // 'gambar.required'           => 'Gambar harus dengan jenis PNG,JPG,JPEG',
                'status.required'           => 'Status tidak boleh kosong',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Halaman::find($id);

                $data->judul_halaman     = $request->judul_halaman;
                $data->sub_judul         = $request->sub_judul;
                $data->konten            = $request->konten;
                $data->status            = $request->status;

                $data->slug              = Str::slug($request->judul_halaman);

                if (isset($request->gambar)) {

                    $posterName = $data->slug . Str::random(10) . '.' . $request->gambar->extension();
                    $path = public_path('gambar/halaman');
                    if (!empty($data->gambar) && file_exists($path . '/' . $data->gambar)) :
                        unlink($path . '/' . $data->gambar);
                    endif;

                    $data->gambar = $posterName;

                    $request->gambar->move(public_path('gambar/halaman'), $posterName);
                }                

                $data->update();
                Alert::toast('Halaman Berhasil diperbarui!', 'success');
                if ($data->status == 'Publish') {
                    return redirect()->route('dasbor.halaman');
                } else {
                    return redirect()->route('dasbor.halaman.draft');
                }

            } catch (\Throwable $th) {

                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // DESTROY
    public function destroy($id)
    {
        $data = Halaman::find($id);

        if($data->delete()) {
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
            return redirect()->back();
        }
    }

    // TRASH
    public function trash()
    {
        $datas          = Halaman::onlyTrashed()->paginate(10);

        $jumlahtrash    = Halaman::onlyTrashed()->count();
        $jumlahdraft    = Halaman::where('status', 'draf')->count();
        $datapublish    = Halaman::where('status', 'publish')->count();

        return view('dasbor.halaman.trash',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // RESTORE
    public function restore($id){
        $data = Halaman::onlyTrashed()->where('id',$id);

        $data->restore();

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);

        return redirect()->route('dasbor.halaman');
    }

    // DELETE
    public function delete($id)
    {
        try {
            $data = Halaman::onlyTrashed()->findOrFail($id);
            $path = public_path('gambar/halaman/' . $data->gambar);

            if (file_exists($path)) {
                File::delete($path);
            }
            
            $data->forceDelete();
            Alert::toast('Halaman Berhasil dihapus!', 'success');
            return redirect()->back();
        } catch (\Throwable $e) {
            dd($e);
            Alert::toast('Gagal', ['error' => $e->getMessage()], 'error');
            return redirect()->back();
        }
    }

}
