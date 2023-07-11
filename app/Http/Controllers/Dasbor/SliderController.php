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
        
        $datas = Slider::where([
            ['judul', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        // ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest()->paginate(5);
        // $datas = Slider::where('status',1)->latest()->paginate(5);

        $jumlahtrash = Slider::onlyTrashed()->count();
        $jumlahdraft = Slider::where('status', 'Draft')->count();
        $datapublish = Slider::where('status', 'Publish')->count();

        return view('dasbor.slider.index',compact('datas','jumlahtrash','jumlahdraft', 'datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function draft(Request $request)
    {

        $datas = Slider::where([
            ['judul', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        // ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->latest()->paginate(5);
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
                'judul' => 'required',
                // 'gambar' => 'image|mimes:png,jpeg,jpg|max:4096',
            ],
            [
                'judul.required' => 'Bagian ini tidak boleh kosong',
                // 'gambar.required' => 'Gambar harus dengan jenis PNG,JPG,JPEG',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = new Slider();
                $data->judul = $request->judul;
                $data->slug = Str::slug($data->judul);
                $data->deskripsi = $request->deskripsi;
                $data->status = $request->status;
                $data->user_id = Auth::user()->id;

                if ($request->gambar) {
                    $imageName = $data->slug . '.' . $request->gambar->extension();
                    $path = public_path('gambar/slider');
                    if (!empty($data->gambar) && file_exists($path . '/' . $data->gambar)) :
                        unlink($path . '/' . $data->gambar);
                    endif;
                    $data->gambar = $imageName;
                    $request->gambar->move(public_path('gambar/slider'), $imageName);
                }

                $data->save();

                Alert::toast('Berhasil dibuat!', 'success');
                return redirect('dasbor/slider/' . $data->slug . '/detail');

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
    public function show($slug)
    {
      $data = Slider::where('slug', $slug)->first();
      return view('dasbor.slider.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $data = Slider::where('slug', $slug)->first();

      return view('dasbor.slider.edit', compact('data'));
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
       
        $validator = Validator::make(
            $request->all(),
            [
                'judul' => 'required',
                // 'gambar' => 'image|mimes:png,jpeg,jpg|max:4096',
            ],
            [
                'judul.required' => 'Bagian ini tidak boleh kosong',
                // 'gambar.required' => 'Gambar harus dengan jenis PNG,JPG,JPEG',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Slider::find($id);
                $data->judul = $request->judul;
                $data->slug = Str::slug($data->judul);
                $data->deskripsi = $request->deskripsi;
                $data->status = $request->status;
                $data->user_id = Auth::user()->id;

                if ($request->gambar) {
                    $imageName = $data->slug . '.' . $request->gambar->extension();
                    $path = public_path('gambar/slider');
                    if (!empty($data->gambar) && file_exists($path . '/' . $data->gambar)) :
                        unlink($path . '/' . $data->gambar);
                    endif;
                    $data->gambar = $imageName;
                    $request->gambar->move(public_path('gambar/slider'), $imageName);
                }

                $data->update();

                Alert::toast('Berhasil diubah!', 'success');
                return redirect('dasbor/slider/' . $data->slug . '/detail');

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
    // DESTROY
    public function destroy($id)
    {
        $data = Slider::find($id);
        if ($data->delete()) {
            //return success with Api Resource
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
            return redirect()->back();
        }
    }

    // TRASH
    public function trash()
    {
        $datas = Slider::onlyTrashed()->paginate(5);
        $jumlahtrash = Slider::onlyTrashed()->count();
        $jumlahdraft = Slider::where('status', 'Draf')->count();
        $datapublish = Slider::where('status', 'Publish')->count();
        return view('dasbor.slider.trash', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // RESTORE
    public function restore($id)
    {
        $data = Slider::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('dasbor.slider');
    }

    // DELETE
    public function delete($id)
    {
        $data = Slider::onlyTrashed()->findOrFail($id);
        
        $path = public_path('gambar/slider/' . $data->gambar);

        if (file_exists($path)) {
            File::delete($path);
        }

        $data->forceDelete();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);
        return to_route('dasbor.slider.trash');
    }

}
