<?php

namespace App\Http\Controllers\Admin\Berita;

use App\Http\Controllers\Controller;
use App\Models\Berita\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class KategoriBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data = KategoriBerita::orderBy('id','DESC')->paginate(5);
        return view('panel.admin.berita.kategori.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.admin.berita.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            ['name' => 'required']);

            if ($validator->fails()) {
                return redirect()->back()->withInput($request->all())->withErrors($validator);
            } else {
                try {
                    $kategori = new KategoriBerita();
                    $kategori->name = $request->name;
                    $kategori->slug = Str::slug($request->name);
                    $kategori->save();
                    Alert::toast('Kategori Berhasil dibuat!', 'success');
                    return redirect()->route('kategori-berita.index');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = KategoriBerita::where('slug',$id)->first();
        return view('panel.admin.berita.kategori.edit',compact('kategori'));
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
        $validator = Validator::make($request->all(),
            ['name' => 'required',]);

            if ($validator->fails()) {
                return redirect()->back()->withInput($request->all())->withErrors($validator);
            } else {
                try {
                    $kategori = KategoriBerita::find($id);
                    $kategori->name = $request->name;
                    $kategori->slug = Str::slug($request->name);
                    $kategori->update();
                    Alert::toast('Kategori Berhasil diperbarui!', 'success');
                    return redirect()->route('kategori-berita.index');
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
        try {
            $ketegori = KategoriBerita::find($id);
            $ketegori->delete();
            Alert::toast('Kategori Berhasil dihapus', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            Alert::toast('Failed', ['error' => $th->getMessage()], 'error');
            return redirect()->back();
        }
    }
}
