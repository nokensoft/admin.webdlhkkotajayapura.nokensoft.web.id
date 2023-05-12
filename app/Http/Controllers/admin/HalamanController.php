<?php

namespace App\Http\Controllers\admin;

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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


        return view('panel.admin.pages.halaman.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }


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

        return view('panel.admin.pages.halaman.index',compact(
            'datas',
            'jumlahtrash',
            'jumlahdraft',
            'datapublish'
        )) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('panel.admin.pages.halaman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul_halaman'             => 'required',
                'konten'                    => 'required',
                'gambar_cover'              => 'image|mimes:png,jpeg,jpg|max:4096',
                'status'                    => 'required',
            ],[
                'judul_halaman.required'    => 'Judul halaman tidak boleh kosong',
                'konten.required'           => 'Konten halaman tidak boleh kosong',
                'status.required'           => 'Status tidak boleh kosong',
                'gambar_cover.required'     => 'Gambar harus dengan jenis PNG,JPG,JPEG',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
               $halaman = new Halaman();
               $halaman->judul_halaman = $request->judul_halaman;
               $halaman->konten = $request->konten;
               $halaman->status = $request->status;
               $halaman->slug = Str::slug($request->judul_halaman);

               if ($request->gambar_cover) {
                    $imageName = Str::slug(12). '.' . $request->gambar_cover->extension();
                    $path = public_path('file/halaman');
                    if (!empty($halaman->gambar_cover) && file_exists($path . '/' . $halaman->gambar_cover)) :
                        unlink($path . '/' . $halaman->gambar_cover);
                    endif;
                    $halaman->gambar_cover = $imageName;
                    $request->gambar_cover->move(public_path('file/halaman'), $imageName);
               }
               $halaman->save();
               Alert::toast('Halaman Berhasil dibuat!', 'success');
               return redirect()->route('app.halaman');
            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Halaman::where('slug',$id)->first();
        return view('panel.admin.pages.halaman.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Halaman::where('slug',$id)->first();
        return view('panel.admin.pages.halaman.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul_halaman'             => 'required',
                'konten'                    => 'required',
                'gambar_cover'              => 'image|mimes:png,jpeg,jpg|max:4096',
                'status'                    => 'required',
            ],[
                'judul_halaman.required'    => 'Judul halaman tidak boleh kosong',
                'konten.required'           => 'Konten halaman tidak boleh kosong',
                'status.required'           => 'Status tidak boleh kosong',
                'gambar_cover.required'     => 'Gambar harus dengan jenis PNG,JPG,JPEG',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
               $halaman = Halaman::find($id);
               $halaman->judul_halaman = $request->judul_halaman;
               $halaman->konten = $request->konten;
               $halaman->status = $request->status;
               $halaman->slug = Str::slug($request->judul_halaman);

               if ($request->gambar_cover) {
                    $imageName = Str::slug(12). '.' . $request->gambar_cover->extension();
                    $path = public_path('file/halaman');
                    if (!empty($halaman->gambar_cover) && file_exists($path . '/' . $halaman->gambar_cover)) :
                        unlink($path . '/' . $halaman->gambar_cover);
                    endif;
                    $halaman->gambar_cover = $imageName;
                    $request->gambar_cover->move(public_path('file/halaman'), $imageName);
               }
               $halaman->update();
               Alert::toast('Halaman Berhasil diperbarui!', 'success');
               return redirect()->route('app.halaman');
            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Halaman::find($id);
        if($data->delete()) {
            //return success with Api Resource
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
            return redirect()->back();
        }
    }

    public function trash()
    {
        $datas = Halaman::onlyTrashed()->paginate(5);
        $jumlahtrash = Halaman::onlyTrashed()->count();
        $jumlahdraft = Halaman::where('status', 'Draf')->count();
        $datapublish = Halaman::where('status', 'Publish')->count();
        return view('panel.admin.pages.halaman.trash',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function restore($id){
        $data = Halaman::onlyTrashed()->where('id',$id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('app.halaman');
    }

    public function delete($id)
    {
        $data = Halaman::onlyTrashed()->findOrFail($id);
        //dd($data);
        if($data->image){
            File::delete($data->image);
        }
        $data->forceDelete();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);
        return to_route('app.halaman.trash');

    }


}
