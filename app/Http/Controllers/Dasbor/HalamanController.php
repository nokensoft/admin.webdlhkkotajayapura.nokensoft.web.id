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
    /*
    | INDEX
    | 
    | menampilkan semua data
    | menampilkan jumlah data dengan status 'publish'
    | menampilkan jumlah data dengan status 'draft'
    | menampilkan jumlah data dengan status 'trash'
    | 
    */
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
        ])->where('status','Publish')->latest()->paginate(5);
        
        $jumlahtrash = Halaman::onlyTrashed()->count();

        $jumlahdraft = Halaman::where('status', 'Draft')->count();
        $datapublish = Halaman::where('status', 'Publish')->count();

        return view('dasbor.halaman.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /*
    | DRAFT
    | 
    | menampilkan data dengan status 'draft'
    | menampilkan jumlah data dengan status 'publish'
    | menampilkan jumlah data dengan status 'draft'
    | menampilkan jumlah data dengan status 'trash'
    | 
    */
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
        ])->where('status','Draft')->latest()->paginate(5);

        $jumlahtrash = Halaman::onlyTrashed()->count();

        $jumlahdraft = Halaman::where('status', 'Draft')->count();
        $datapublish = Halaman::where('status', 'Publish')->count();

        return view('dasbor.halaman.index',compact(
            'datas',
            'jumlahtrash',
            'jumlahdraft',
            'datapublish'
        )) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /*
    | CREATE
    | 
    | menampilkan halaman form 'create'
    | 
    */
    public function create()
    {
        return view('dasbor.halaman.create');
    }

    /*
    | STORE
    | 
    | melakukan proses 'store'
    | gambar disimpan ke dalam direktori 'gambar/halaman'
    | 
    */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul_halaman'             => 'required',
                // 'konten'                  => 'required',
                // 'gambar'                 => 'image|mimes:png,jpeg,jpg|max:4096',
                // 'status'                 => 'required',
            ],[
                // 'judul_halaman.required' => 'Judul halaman tidak boleh kosong',
                // 'konten.required'        => 'Konten halaman tidak boleh kosong',
                // 'status.required'        => 'Status tidak boleh kosong',
                // 'gambar.required'        => 'Gambar harus dengan jenis PNG,JPG,JPEG',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
               $halaman = new Halaman();

               $halaman->judul_halaman = $request->judul_halaman;
               $halaman->sub_judul = $request->sub_judul;
               $halaman->konten = $request->konten;
               $halaman->status = $request->status;

               $halaman->slug = Str::slug($request->judul_halaman);

               if ($request->gambar) {
                    $imageName = $halaman->slug . '.' . $request->gambar->extension();
                    $path = 'gambar/halaman/';

                    if (!empty($halaman->gambar) && file_exists($path, $halaman->gambar)) :
                        unlink($path, $halaman->gambar);
                    endif;

                    $halaman->gambar = $path . $imageName;
                    $request->gambar->move($path, $imageName);
               }

               $halaman->save();

               Alert::toast('Halaman Berhasil dibuat!', 'success');

               return redirect()->route('dasbor.halaman');

            } catch (\Throwable $th) {

                Alert::toast('Gagal', 'error');

                return redirect()->back();
            }
        }
    }

    /*
    | SHOW
    | 
    | menampilkan halaman 'show/detail'
    | data ditampilkan berdasarkan parameter 'slug'
    | 
    */
    public function show($slug)
    {
        $data = Halaman::where('slug',$slug)->first();
        return view('dasbor.halaman.show',compact('data'));
    }

    /*
    | EDIT
    | 
    | menampilkan halaman 'edit'
    | data ditampilkan berdasarkan parameter 'slug'
    | 
    */
    public function edit($slug)
    {
        $data = Halaman::where('slug',$slug)->first();
        return view('dasbor.halaman.edit',compact('data'));
    }

    /*
    | UPDATE
    | 
    | melakukan proses 'update'
    | gambar disimpan ke dalam direktori 'gambar/halaman'
    | jika gambar eksis, gambar akan diupdate atau dihapus dan diganti dengan yang baru
    | 
    */
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul_halaman'             => 'required',
                'konten'                    => 'required',
                'gambar'                    => 'image|mimes:png,jpeg,jpg|max:4096',
                'status'                    => 'required',
            ],[
                'judul_halaman.required'    => 'judul_halaman halaman tidak boleh kosong',
                'konten.required'           => 'Konten halaman tidak boleh kosong',
                'status.required'           => 'Status tidak boleh kosong',
                'gambar.required'     => 'Gambar harus dengan jenis PNG,JPG,JPEG',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $halaman = Halaman::find($id);

                $halaman->judul_halaman = $request->judul_halaman;
                $halaman->sub_judul = $request->sub_judul;
                $halaman->konten = $request->konten;
                $halaman->status = $request->status;

                $halaman->slug = Str::slug($request->judul_halaman);

                if ($request->gambar) {
                    $imageName = $halaman->slug . '.' . $request->gambar->extension();
                    $path = 'gambar/halaman/';
                    if (!empty($halaman->gambar) && file_exists($path, $halaman->gambar)) :
                        unlink($path, $halaman->gambar);
                    endif;
                    $halaman->gambar = $path . $imageName;
                    $request->gambar->move($path, $imageName);
                }

                $halaman->update();

                Alert::toast('Halaman Berhasil diperbarui!', 'success');
                return redirect()->route('dasbor.halaman');
            } catch (\Throwable $th) {

                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    /*
    | DESTROY
    | 
    | melakukan proses 'destroy'
    | 
    */
    public function destroy($id)
    {
        $data = Halaman::find($id);

        if($data->delete()) {
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
            return redirect()->back();
        }
    }

    /*
    | TRASH
    | 
    | menampilkan data dengan status 'trash'
    | menampilkan jumlah data dengan status 'publish'
    | menampilkan jumlah data dengan status 'draft'
    | menampilkan jumlah data dengan status 'trash'
    | 
    */
    public function trash()
    {
        $datas = Halaman::onlyTrashed()->paginate(5);

        $jumlahtrash = Halaman::onlyTrashed()->count();
        $jumlahdraft = Halaman::where('status', 'Draf')->count();
        $datapublish = Halaman::where('status', 'Publish')->count();

        return view('dasbor.halaman.trash',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /*
    | RESTORE
    | 
    | melakukan proses 'restore'
    | 
    */
    public function restore($id){
        $data = Halaman::onlyTrashed()->where('id',$id);

        $data->restore();

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);

        return redirect()->route('dasbor.halaman');
    }

    /*
    | DELETE
    | 
    | melakukan proses 'delete'
    | 
    */
    public function delete($id)
    {
        $data = Halaman::onlyTrashed()->findOrFail($id);

        if($data->gambar){
            File::delete($data->gambar);
        }

        $data->forceDelete();

        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);

        return to_route('dasbor.halaman.trash');

    }


}
