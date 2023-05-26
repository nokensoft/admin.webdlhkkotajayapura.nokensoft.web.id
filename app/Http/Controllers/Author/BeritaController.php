<?php

namespace App\Http\Controllers\Author;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Berita\Berita;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Berita\KategoriBerita;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $data = Berita::where([

            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subjudul', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','publish')->latest()->paginate(5);

        $jumlahtrash = Berita::onlyTrashed()->count();
        $jumlahrevisi = Berita::where('status', 'revisi')->count();
        $jumlahdraft = Berita::where('status', 'draft')->count();
        $datapublish = Berita::where('status', 'publish')->count();

        return view('dasbor.author.berita.index',compact( 'data', 'jumlahtrash', 'jumlahdraft', 'datapublish','jumlahrevisi'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function draft(){

        $data = Berita::where([
            ['judul', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subjudul', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','draft')->latest()->paginate(5);
        $jumlahtrash = Berita::onlyTrashed()->count();
        $jumlahrevisi = Berita::where('status', 'revisi')->count();
        $jumlahdraft = Berita::where('status', 'draft')->count();
        $datapublish = Berita::where('status', 'publish')->count();

        return view('dasbor.author.berita.index',compact(
            'data','jumlahtrash','jumlahdraft','datapublish','jumlahrevisi'
            )) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function revisi(){

        $data = Berita::where([
            ['judul', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subjudul', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','revisi')->latest()->paginate(5);
        $jumlahtrash = Berita::onlyTrashed()->count();
        $jumlahrevisi = Berita::where('status', 'revisi')->count();
        $jumlahdraft = Berita::where('status', 'draft')->count();
        $datapublish = Berita::where('status', 'publish')->count();

        return view('dasbor.author.berita.revisi',compact(
            'data','jumlahtrash','jumlahdraft','datapublish','jumlahrevisi'
            )) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function trash(){
        $datas = Berita::onlyTrashed()->paginate(10);
        return view('dasbor.author.berita.trash',compact('datas'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
     }

     // CREATE
     public function create()
    {
        // $kategoris = KategoriBerita::pluck('name','id');
        $kategoris = KategoriBerita::where('status','publish')->get();
        return view('dasbor.author.berita.create', compact('kategoris'));
    }

     // SHOW
     public function show($id)
     {
         $berita = Berita::where('slug',$id)->first();
         return view('dasbor.author.berita.show',compact('berita'));
     }

     // EDIT
     public function edit($id)
     {
         $kategori = KategoriBerita::all();
         $berita = Berita::where('slug',$id)->first();
         return view('dasbor.author.berita.edit',compact('kategori','berita'));
     }

    //  Delete
    public function destroy($id) {
        $data = Berita::findOrFail($id);
        $data->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('app.berita');
    }

    public function restore($id){
        $data = Berita::onlyTrashed()->where('id',$id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('app.berita');
    }

    public function delete($id)
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

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'judul' => 'required|max:255',
                'body' => 'required',
                'image' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg|max:4096',
                'category_id' => 'required|integer'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput($request->all())->withErrors($validator);
            } else {
                try {

                    $berita = new Berita();
                    $berita->judul = $request->judul;
                    $berita->slug = Str::slug($request->judul);
                    $berita->body = $request->body;
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
                    return redirect()->route('app.berita.draft');
                } catch (\Throwable $th) {
                    dd($th);
                    Alert::toast('Gagal', 'error');
                    return redirect()->back();
                }
            }
    }

     // UPDATE
     public function update(Request $request, $id)
     {
         $validator = Validator::make($request->all(),
             [
                 'judul' => 'required|max:255',
                 'body' => 'required',
                 'image' => 'required',
                 'image' => 'image|mimes:jpeg,png,jpg|max:4096',
                 'category_id' => 'required|integer'
             ]);

             if ($validator->fails()) {
                 return redirect()->back()->withInput($request->all())->withErrors($validator);
             } else {
                 try {
                     $berita = Berita::find($id);
                     $berita->judul = $request->judul;
                     $berita->slug = Str::slug($request->judul);
                     $berita->body = $request->body;
                     $berita->status = 'draft';
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
                     return redirect()->route('app.berita.draft');
                 } catch (\Throwable $th) {
                     Alert::toast('Gagal', 'error');
                     return redirect()->back();
                 }
             }
     }

    // STATUS
    public function updateStatus(Request $request, $id)
    {
        $validator = Validator::make($request->only('status','ket'),
            [
                'status' => 'required|max:255',
                'ket'    => 'required_if:status,revisi',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput($request->all())->withErrors($validator);
            } else {
                try {
                   Berita::where('id',$id)->update([
                        'status' => $request->status,
                        'user_id' => Auth::user()->id,
                        'ket' => $request->ket,
                    ]);
                    Alert::toast('Status Berhasil diperbarui!', 'success');
                    return redirect()->route('app.berita');
                } catch (\Throwable $th) {
                    Alert::toast('Gagal', 'error');
                    return redirect()->back();
                }
            }
    }

     // EDIT
     public function editStatus($id)
     {
         $data = Berita::where('slug',$id)->first();
         return view('dasbor.author.berita.status',compact('data'));
     }
}
