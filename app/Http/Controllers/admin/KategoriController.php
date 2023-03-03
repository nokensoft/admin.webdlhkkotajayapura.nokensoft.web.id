<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use Image;
use Alert;
use Storage;
use Illuminate\Support\Str;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datas = Kategori::where([
            ['title', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',1)->latest()->paginate(5);
        $jumlahtrash = Kategori::onlyTrashed()->count();
        $jumlahdraft = Kategori::where('status', 0)->count();
        $datapublish = Kategori::where('status', 1)->count();
        

        return view('admin.pages.kategori.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    
    
    public function draft(Request $request)
    {
         
        $datas = Kategori::where([
            ['title', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',0)->paginate(5);
        // $datas = kategori::where('status',1)->latest()->paginate(5);
        
        $jumlahtrash = Kategori::onlyTrashed()->count();
        $jumlahdraft = Kategori::where('status', 0)->count();
        $datapublish = Kategori::where('status', 1)->count();
        return view('admin.pages.kategori.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.kategori.create');
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
            'status' => 'required',
            'katakunci' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if(!empty( $request->file('image'))){
            $filename  = 'nokensoft'.'-'.date('Y-m-d-H-i-s').$request->file('image')->getClientOriginalName();
   
        //    Input::file('foto')->move(public_path().'/source/upload',$filename);

        $request->file('image')->storeAs('public/resource/sliders',$filename);
           //    $image->storeAs('public/resource/sliders', $image->hashName());
   
           $data = $request->all();

              $data = array(
              
              
             'image'=> $filename,
             'title' => $request->title,
             'deskripsi' => $request->deskripsi,
              'katakunci' => $request->katakunci,
             'status' => $request->status,
                'slug' => Str::slug($request->title),
            
            );
            $Kategori = Kategori::create($data);
        }
        else{
            $data = $request->all();

            $data = array(
            
           
           'title' => $request->title,
           'deskripsi' => $request->deskripsi,
            'katakunci' => $request->katakunci,
           'status' => $request->status,
            'slug' => Str::slug($request->title),
          
          );
          $Kategori = Kategori::create($data);
        }
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('app.kategori');

       

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
        $data = Kategori::findOrFail($id);
        return view('admin.pages.kategori.edit',compact('data'));
        

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
            'status' => 'required',
            'katakunci' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if(!empty( $request->file('image'))){
            $filename  = 'nokensoft'.'-'.date('Y-m-d-H-i-s').$request->file('image')->getClientOriginalName();
   
        //    Input::file('foto')->move(public_path().'/source/upload',$filename);

        $request->file('image')->storeAs('public/resource/sliders',$filename);
           //    $image->storeAs('public/resource/sliders', $image->hashName());
   
           $data = $request->all();

              $data = array(
              
              
             'image'=> $filename,
             'title' => $request->title,
             'deskripsi' => $request->deskripsi,
              'katakunci' => $request->katakunci,
             'status' => $request->status,
                'slug' => Str::slug($request->title),
            
            );
            $Kategori = Kategori::whereId($id)->update($data);
        }
        else{
            $data = $request->all();

            $data = array(
            
           
           'title' => $request->title,
           'deskripsi' => $request->deskripsi,
            'katakunci' => $request->katakunci,
           'status' => $request->status,
            'slug' => Str::slug($request->title),
          
          );
          $Kategori = Kategori::whereId($id)->update($data);
        }
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('app.kategori');
    }

    public function destroy($id) {
        $data = Kategori::findOrFail($id);
        $data->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('app.kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function trash(){
        $datas = Kategori::onlyTrashed()->paginate(10);
        return view('admin.pages.kategori.trash',compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
     }

     public function restore($id){
        $data = Kategori::onlyTrashed()->where('id',$id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('app.kategori');

        
     }


     public function delete($id){
        $data = Kategori::onlyTrashed()->where('id',$id);

        if(!empty($data->image)){
            \Storage::delete('public/resource/kategori/'.$data->image);
        }

        $data->forceDelete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('app.kategori.trash');
     }
     
}
