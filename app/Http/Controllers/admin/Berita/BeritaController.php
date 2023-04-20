<?php

namespace App\Http\Controllers\Admin\Berita;

use App\Http\Controllers\Controller;
use App\Models\Berita\Berita;
use App\Models\Berita\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Berita::orderBy('id','DESC')->paginate(5);
        return view('panel.admin.berita.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriBerita::pluck('name','id');
        return view('panel.admin.berita.create',compact('kategori'));
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
            [
                'title' => 'required|max:255',
                'body' => 'required',
                'status' => 'required',
                'image' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg|max:4096',
                'category_id' => 'required|integer'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput($request->all())->withErrors($validator);
            } else {
                try {

                    $berita = new Berita();
                    $berita->title = $request->title;
                    $berita->slug = Str::slug($request->title);
                    $berita->body = $request->body;
                    $berita->status = $request->status;
                    $berita->category_id = $request->category_id;
                    $berita->user_id = Auth::user()->id;

                    $posterName = time().'.'.$request->image->extension();
                    $path = public_path('file/berita');
                        if(!empty($berita->image) && file_exists($path.'/'.$berita->image)) :
                            unlink($path.'/'.$berita->image);
                        endif;
                    $berita->image = $posterName;

                    $berita->save();
                    $request->image->move(public_path('file/berita'), $posterName);
                    Alert::toast('Berita Berhasil dibuat!', 'success');
                    return redirect()->route('berita.index');
                } catch (\Throwable $th) {
                    dd($th);
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
        $berita = Berita::where('slug',$id)->first();
        return view('panel.admin.berita.show',compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = KategoriBerita::all();
        $berita = Berita::where('slug',$id)->first();
        return view('panel.admin.berita.edit',compact('kategori','berita'));
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
            [
                'title' => 'required|max:255',
                'body' => 'required',
                'status' => 'required',
                'image' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg|max:4096',
                'category_id' => 'required|integer'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput($request->all())->withErrors($validator);
            } else {
                try {
                    $berita = Berita::find($id);
                    $berita->title = $request->title;
                    $berita->slug = Str::slug($request->title);
                    $berita->body = $request->body;
                    $berita->status = $request->status;
                    $berita->category_id = $request->category_id;
                    $berita->user_id = Auth::user()->id;
                    if($request->image){
                        $posterName = time().'.'.$request->image->extension();
                        $path = public_path('file/berita');
                            if(!empty($berita->image) && file_exists($path.'/'.$berita->image)) :
                                unlink($path.'/'.$berita->image);
                            endif;
                        $berita->image = $posterName;
                        $request->image->move(public_path('file/berita'), $posterName);
                    }
                    $berita->update();
                    Alert::toast('Berita Berhasil diperbarui!', 'success');
                    return redirect()->route('berita.index');
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
            $berita = Berita::find($id);
            $path = public_path('file/berita/' . $berita->image);

            if (file_exists($path)) {
                File::delete($path);
            }
            $berita->delete();
            Alert::toast('Berita Berhasil dihapus!', 'success');
            return redirect()->back();
        } catch (\Throwable $e) {
            Alert::toast('Failed', ['error' => $e->getMessage()], 'error');
            return redirect()->back();
        }
    }
}
