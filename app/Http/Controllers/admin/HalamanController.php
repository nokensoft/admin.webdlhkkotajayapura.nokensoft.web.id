<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Halaman;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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
            ['title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',1)->latest()->paginate(5);
        $jumlahtrash = Halaman::onlyTrashed()->count();
        $jumlahdraft = Halaman::where('status', 0)->count();
        $datapublish = Halaman::where('status', 1)->count();


        return view('panel.admin.pages.halaman.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function draft()
    {
        $datas = Halaman::where([
            ['title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',0)->latest()->where('deleted_at', NULL)->paginate(5);
        $jumlahtrash = Halaman::onlyTrashed()->count();
        $jumlahdraft = Halaman::where('status', 0)->count();
        $datapublish = Halaman::where('status', 1)->count();


        return view('panel.admin.pages.halaman.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
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
        $request->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'konten' => 'required',
            'katakunci' => 'required',
            'status' => 'required',
        ]);

        $tahun = date("Y");
        $bulan = date("M");

        if(!empty( $request->file('image'))){

            $filename  = 'nokensoft'.'-'.date('Y-m-d-H-i-s').$request->file('image')->getClientOriginalName();

        //    Input::file('foto')->move(public_path().'/source/upload',$filename);

        //$request->file('image')->storeAs('public/resource/halamans/'.date('Y').'/'.date('M'),$filename);
        $request->file('image')->storeAs('public/resource/halamans/'.$tahun.'/'.$bulan,$filename);
           //    $image->storeAs('public/resource/sliders', $image->hashName());
           $url = ('storage/resource/halamans/'.$tahun.'/'.$bulan.'/'.$filename);

           $data = $request->all();
           $data = Halaman::create([
             'image'=> $url,
             'title' => $request->title,
             'deskripsi' => $request->deskripsi,
             'konten' => $request->konten,
             'katakunci' => $request->katakunci,
             'status' => $request->status,
             'slug' => Str::slug($request->title),
             'created_by' => Auth::user()->id,
              'updated_by' => Auth::user()->id,
            ]);

        } else {
            $data = $request->all();
            $data = Halaman::create([
              'title' => $request->title,
              'deskripsi' => $request->deskripsi,
              'konten' => $request->konten,
              'katakunci' => $request->katakunci,
              'status' => $request->status,
              'slug' => Str::slug($request->title),
              'created_by' => Auth::user()->id,
              'updated_by' => Auth::user()->id,

             ]);
        }

        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);
              return redirect('app/halaman');

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
        $data = Halaman::whereId($id)->first();
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
        $request->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'konten' => 'required',
            'katakunci' => 'required',
            'status' => 'required',
        ]);
        $tahun = date("Y");
        $bulan = date("M");

        if(!empty( $request->file('image'))){
            $filename  = 'nokensoft'.'-'.date('Y-m-d-H-i-s').$request->file('image')->getClientOriginalName();
            // Input::file('foto')->move(public_path().'/source/upload',$filename);
            //$request->file('image')->storeAs('public/resource/halamans/'.date('Y').'/'.date('M'),$filename);
            $request->file('image')->storeAs('public/resource/halamans/'.$tahun.'/'.$bulan,$filename);
            //    $image->storeAs('public/resource/sliders', $image->hashName());
            $url = ('storage/resource/halamans/'.$tahun.'/'.$bulan.'/'.$filename);

            $datalama = Halaman::findOrFail($id);
            if($datalama->image){
                File::delete($datalama->image);

        }

        //dd($datalama->image);

        $data = $request->all();
           $data = array(
                'image'=> $url,
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                'konten' => $request->konten,
                'katakunci' => $request->katakunci,
                'status' => $request->status,
                'slug' => Str::slug($request->title),
                'updated_by' => Auth::user()->id,
            );
            $Halaman = Halaman::find($id);
            $Halaman->update($data);
                 } else {

                    $data = array(
                        'title' => $request->title,
                        'deskripsi' => $request->deskripsi,
                        'konten' => $request->konten,
                        'katakunci' => $request->katakunci,
                        'status' => $request->status,
                        'slug' => Str::slug($request->title),
                        'updated_by' => Auth::user()->id,
                    );
                    $Halaman = Halaman::find($id);
                    $Halaman->update($data);
                }

             alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);
              return redirect('app/halaman');
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
            alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);
            return redirect()->back();
        }
    }

    public function trash()
    {
        $datas = Halaman::onlyTrashed()->paginate(5);
        $jumlahtrash = Halaman::onlyTrashed()->count();
        $jumlahdraft = Halaman::where('status', 0)->count();
        $datapublish = Halaman::where('status', 1)->count();
        return view('admin.pages.halaman.trash',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
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
