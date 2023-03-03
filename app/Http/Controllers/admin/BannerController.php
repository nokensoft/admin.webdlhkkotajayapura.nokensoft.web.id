<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Image;
use Alert;
use Storage;
use Auth;
use Illuminate\Support\Str;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Banner::where([
            ['title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',1)->latest()->paginate(5);
        $jumlahtrash = Banner::onlyTrashed()->count();
        $jumlahdraft = Banner::where('status', 0)->count();
        $datapublish = Banner::where('status', 1)->count();
        

        return view('admin.pages.banner.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function draft()
    {
        $datas = Banner::where([
            ['title', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subtitle', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',0)->latest()->paginate(5);
        $jumlahtrash = Banner::onlyTrashed()->count();
        $jumlahdraft = Banner::where('status', 0)->count();
        $datapublish = Banner::where('status', 1)->count();
        

        return view('admin.pages.banner.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        return view('admin.pages.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tahun = date("Y");
        $bulan = date("M");
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'link' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);

           //upload image
           $filename  = 'nokensoft'.'-'.date('Y-m-d-H-i-s').$request->file('image')->getClientOriginalName();
    
        $request->file('image')->storeAs('public/resource/banners/'.$tahun.'/'.$bulan,$filename);
            
           $url = ('storage/resource/banners/'.$tahun.'/'.$bulan.'/'.$filename);

        $form_data = array(
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'link' => $request->link,
            'image' => $url,
            'status' => $request->status,
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
            'slug' => Str::slug($request->title, '-'),
        );

        Banner::create($form_data);

        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('app.banner');
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
       
        $data = Banner::findOrFail($id);
        return view('admin.pages.banner.edit', compact('data'));
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
        
        $tahun = date("Y");
        $bulan = date("M");

        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'link' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);

        $form_data = array(
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'link' => $request->link,
            'status' => $request->status,
            'updated_by' => Auth::user()->id,
            'slug' => Str::slug($request->title, '-'),
        );

        if ($request->hasFile('image')) {
            $filename  = 'nokensoft'.'-'.date('Y-m-d-H-i-s').$request->file('image')->getClientOriginalName();
    
            $request->file('image')->storeAs('public/resource/banners/'.$tahun.'/'.$bulan,$filename);
                
               $url = ('storage/resource/banners/'.$tahun.'/'.$bulan.'/'.$filename);
            $form_data['image'] = $url;

            $datalama = Banner::findOrFail($id);
            if($datalama->image){
             \File::delete($datalama->image);
        }
    }


     
        
    $data = Banner::find($id);
    $data->update($form_data);

      alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1200);
        return redirect()->route('app.banner');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = Banner::findOrFail($id);
        $data->delete();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1200);
        return redirect()->back();

        
    }

    public function trash()
    {
        $datas = Banner::onlyTrashed()->paginate(5);
        $jumlahtrash = Banner::onlyTrashed()->count();
        $jumlahdraft = Banner::where('status', 0)->count();
        $datapublish = Banner::where('status', 1)->count();
        

        return view('admin.pages.banner.trash',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function restore($id){
        $data = Banner::onlyTrashed()->where('id',$id);
        $data->restore();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1200);
        return redirect()->back();
    }

    public function delete($id)
    {
        $data = Banner::onlyTrashed()->findOrFail($id);
//dd($data->image);
        if($data->image){
            \File::delete($data->image);
             
            
        }

        $data->forceDelete();

       

        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1200);
        return redirect()->back();
    }
}
