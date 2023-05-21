<?php

namespace App\Http\Controllers\Author;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Berita\KategoriBerita;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $datas = KategoriBerita::where([

            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','publish')->latest()->paginate(5);
        $jumlahtrash = KategoriBerita::onlyTrashed()->count();
        $jumlahdraft = KategoriBerita::where('status', 'draft')->count();
        $datapublish = KategoriBerita::where('status', 'publish')->count();
        return view('dasbor.author.kategori.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function draft(Request $request)
    {
        $datas = KategoriBerita::where([

            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','draft')->paginate(5);
        // $datas = kategori::where('status',1)->latest()->paginate(5);

        $jumlahtrash = KategoriBerita::onlyTrashed()->count();
        $jumlahdraft = KategoriBerita::where('status', 'draft')->count();
        $datapublish = KategoriBerita::where('status', 'publish')->count();
        return view('dasbor.author.kategori.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('dasbor.author.kategori.create');
    }

    public function trash()
    {
        $datas = KategoriBerita::onlyTrashed()->paginate(10);
        return view('dasbor.author.kategori.trash',compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function edit($id)
    {
         $kategori = KategoriBerita::where('slug',$id)->first();
         return view('dasbor.author.kategori.edit',compact('kategori'));
    }

     public function destroy($id)
     {
         $data = KategoriBerita::findOrFail($id);
         $data->delete();
         alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
         return redirect()->route('app.kategori');
     }

     public function restore($id){
        $data = KategoriBerita::onlyTrashed()->where('id',$id);
         $data->restore();
         alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
         return redirect()->route('app.kategori');

     }


      public function delete($id){
         $data = KategoriBerita::onlyTrashed()->where('id',$id);
         $data->forceDelete();
         alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
         return redirect()->route('app.kategori.trash');
      }

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
                      $kategori->status = $request->status;
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
}
