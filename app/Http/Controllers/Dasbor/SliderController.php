<?php

namespace App\Http\Controllers\Dasbor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $datas = Slider::where('status',1)->when(request()->q, function($datas) {
        //     $datas = $datas->where('judul', 'like', '%'. request()->s . '%');
        // })->latest()->paginate(5);
        $datas = Slider::where([
            ['judul', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        // ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',1)->latest()->paginate(5);
        // $datas = Slider::where('status',1)->latest()->paginate(5);

        $jumlahtrash = Slider::onlyTrashed()->count();
        $jumlahdraft = Slider::where('status', 'Draft')->count();
        $datapublish = Slider::where('status', 'Publish')->count();

        return view('dasbor.slider.index',compact('datas','jumlahtrash','jumlahdraft', 'datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function draft(Request $request)
    {
        // $datas = Slider::where('status',1)->when(request()->q, function($datas) {
        //     $datas = $datas->where('judul', 'like', '%'. request()->s . '%');
        // })->latest()->paginate(5);

        $datas = Slider::where([
            ['judul', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        // ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',0)->latest()->paginate(5);
        // $datas = Slider::where('status',1)->latest()->paginate(5);

        $jumlahtrash = Slider::onlyTrashed()->count();
        $jumlahdraft = Slider::where('status', 'Draft')->count();
        $datapublish = Slider::where('status', 'Publish')->count();

        return view('dasbor.slider.index',compact('datas','jumlahtrash','jumlahdraft', 'datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dasbor.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul'            => 'required',
                // 'gambar'              => 'image|mimes:png,jpeg,jpg|max:4096',
                // 'status'                    => 'required',
            ],
            [
                'judul.required'   => 'Bagian ini tidak boleh kosong',
                // 'status.required'           => 'Status tidak boleh kosong',
                // 'gambar.required'     => 'Gambar harus dengan jenis PNG,JPG,JPEG',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $slider = new Slider();
                $slider->judul = $request->judul;
                $slider->deskripsi = $request->deskripsi;
                $slider->status = $request->status;

                if ($request->gambar) {
                    $imageName = $slider->slug . '.' . $request->gambar->extension();
                    $path = public_path('gambar/slider');
                    if (!empty($slider->gambar) && file_exists($path . '/' . $slider->gambar)) :
                        unlink($path . '/' . $slider->gambar);
                    endif;
                    $slider->gambar = $imageName;
                    $request->gambar->move(public_path('gambar/slider'), $imageName);
                }
                $slider->save();

                Alert::toast('Berhasil!', 'success');
                return redirect()->route('dasbor.slider');

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
      $data = Slider::whereId($id)->first();

      return view('dasbor.slider.detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Slider::whereId($id)->first();

      return view('dasbor.slider.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     */
    public function update(Request $request, $id)
    {
        if(!empty( $request->file('image'))){

            $filename  = 'nokensoft'.'-'.date('Y-m-d-H-i-s').$request->file('image')->getClientOriginalName();

        //    Input::file('foto')->move(public_path().'/source/upload',$filename);

        $request->file('image')->storeAs('public/resource/sliders',$filename);
           //    $image->storeAs('public/resource/sliders', $image->hashName());

           $datalama = Slider::findOrFail($id);
           if($datalama->image){
            File::delete($datalama->image);

        }

           $data = $request->all();
           $data = array(


             'image'=> $filename,
             'judul' => $request->judul,
             'deskripsi' => $request->deskripsi,
             'status' => $request->status,

            );



     $Slider = Slider::find($id);
        $Slider->update($data);
             }
              else {
                  $data = $request->all();
                  $data = array(
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'status' => $request->status,);




     $Slider = Slider::find($id);
        $Slider->update($data);
              }
              alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);
              return redirect('dasbor/slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = Slider::find($id);




        if($data->delete()) {
            //return success with Api Resource
            alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);
        }

    }



    public function trash()
{
    $datas = Slider::onlyTrashed()->paginate(10);

    return view('dasbor.slider.trash',compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
}





public function restore($id)
{
    $data = Slider::onlyTrashed()->findOrFail($id);
    $data->restore();

    return to_route('dasbor.slider.trash')->with('success','Data restored successfully');
}




public function delete($id)
{
    $data = Slider::onlyTrashed()->findOrFail($id);

    //dd($data);
    if($data->image){
        Storage::delete('public/resource/sliders/'.$data->image);


    }

    $data->forceDelete();

    alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);
    return to_route('dasbor.slider.trash');

}

}
