<?php

namespace App\Http\Controllers\Dasbor;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\InformasiLingkungan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class InformasiLingkunganController extends Controller
{
    public function index()
    {
        $datas = InformasiLingkungan::where([
            ['judul', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        ->orWhere('url', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','publish')->latest()->paginate(5);

        $jumlahtrash = InformasiLingkungan::onlyTrashed()->count();

        $jumlahdraft = InformasiLingkungan::where('status', 'draft')->count();
        $datapublish = InformasiLingkungan::where('status', 'publish')->count();

        return view('dasbor.informasi-lingkungan.index',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function draft()
    {
        $datas = InformasiLingkungan::where([
            ['judul', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        ->orWhere('url', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','draft')->latest()->paginate(5);

        $jumlahtrash = InformasiLingkungan::onlyTrashed()->count();

        $jumlahdraft = InformasiLingkungan::where('status', 'draft')->count();
        $datapublish = InformasiLingkungan::where('status', 'publish')->count();

        return view('dasbor.informasi-lingkungan.index',compact(
            'datas',
            'jumlahtrash',
            'jumlahdraft',
            'datapublish'
        )) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function trash()
    {
        $datas = InformasiLingkungan::onlyTrashed()->paginate(5);

        $jumlahtrash = InformasiLingkungan::onlyTrashed()->count();
        $jumlahdraft = InformasiLingkungan::where('status', 'draf')->count();
        $datapublish = InformasiLingkungan::where('status', 'publish')->count();

        return view('dasbor.informasi-lingkungan.trash',compact('datas','jumlahtrash','jumlahdraft','datapublish')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('dasbor.informasi-lingkungan.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul'                     => 'required',
                'keterangan_singkat'        => 'required',
                'keterangan_lengkap'        => 'required|string|max:255',
                'url'                       => 'required',
                'status'                    => 'required',
                'gambar'                   => 'required|image|mimes:jpeg,png,jpg|max:2024',
            ],[
                'judul.required'                => 'Judul  tidak boleh kosong',
                'keterangan_singkat.required'   => 'Keterangan Singkat tidak boleh kosong',
                'keterangan_lengkap.required'   => 'Keterangan Lengkap tidak boleh kosong',
                'keterangan_lengkap.max'   => 'Keterangan Lengkap tidak boleh lebih dari 255 karakter.',
                'gambar.required'               => 'Gambar tidak boleh kosong',
                'gambar.mimes'                  => 'Gambar harus dengan jenis PNG,JPG,JPEG',
                'status.required'               => 'Status tidak boleh kosong',
                'url.required'                  => 'Tautan / URL tidak boleh kosong',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
               $linkunganinfo = new InformasiLingkungan();
               $linkunganinfo->judul = $request->judul;
               $linkunganinfo->keterangan_singkat = $request->keterangan_singkat;
               $linkunganinfo->keterangan_lengkap = $request->keterangan_lengkap;
               $linkunganinfo->status = $request->status;
               $linkunganinfo->url = $request->url;

                if($request->gambar){
                    $imageName = Str::random(8) . '.' . $request->gambar->extension();
                    $path = 'gambar/informasi-lingkungan/';

                    if (!empty($linkunganinfo->gambar) && file_exists($path, $linkunganinfo->gambar)) :
                        unlink($path, $linkunganinfo->gambar);
                    endif;
                    $linkunganinfo->gambar = $path . $imageName;
                    $request->gambar->move($path, $imageName);
                }
               $linkunganinfo->save();
               Alert::toast('Linkungan Hidup Berhasil dibuat!', 'success');
               return redirect()->route('dasbor.informasilingkungan');

            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    public function show($id)
    {
        $data = InformasiLingkungan::where('id',$id)->first();
        return view('dasbor.informasi-lingkungan.show',compact('data'));
    }
    public function edit($id)
    {
        $data = InformasiLingkungan::where('id',$id)->first();
        return view('dasbor.informasi-lingkungan.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul'                     => 'required',
                'keterangan_singkat'        => 'required',
                'keterangan_lengkap'        => 'required|string|max:255',
                'url'                       => 'required',
                'status'                    => 'required',
                'gambar'                   => 'image|mimes:jpeg,png,jpg',
            ],[
                'judul.required'                => 'Judul  tidak boleh kosong',
                'keterangan_singkat.required'   => 'Keterangan Singkat tidak boleh kosong',
                'keterangan_lengkap.required'   => 'Keterangan Lengkap tidak boleh kosong',
                'gambar.required'               => 'Gambar tidak boleh kosong',
                'gambar.mimes'                  => 'Gambar harus dengan jenis PNG,JPG,JPEG',
                'status.required'               => 'Status tidak boleh kosong',
                'url.required'                  => 'Tautan / URL tidak boleh kosong',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $linkunganinfo = InformasiLingkungan::find($id);
                $linkunganinfo->judul = $request->judul;
                $linkunganinfo->keterangan_singkat = $request->keterangan_singkat;
                $linkunganinfo->keterangan_lengkap = $request->keterangan_lengkap;
                $linkunganinfo->status = $request->status;
                $linkunganinfo->url = $request->url;


                if ($request->gambar) {
                    $imageName =  Str::random(8) . '.' . $request->gambar->extension();
                    $path = 'gambar/informasi-lingkungan/';
                    if (!empty($linkunganinfo->gambar) && file_exists($path, $linkunganinfo->gambar)) :
                        unlink($path, $linkunganinfo->gambar);
                    endif;
                    $linkunganinfo->gambar = $path . $imageName;
                    $request->gambar->move($path, $imageName);
                }

                $linkunganinfo->update();

                Alert::toast('Informasi Lingkungan Berhasil diperbarui!', 'success');
                return redirect()->route('dasbor.informasilingkungan');
            } catch (\Throwable $th) {

                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    public function restore($id){
        $data = InformasiLingkungan::onlyTrashed()->where('id',$id);

        $data->restore();

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);

        return redirect()->route('dasbor.informasilingkungan');
    }

    public function destroy($id)
    {
        $data = InformasiLingkungan::find($id);

        if($data->delete()) {
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $data = InformasiLingkungan::onlyTrashed()->findOrFail($id);

        if($data->gambar){
            File::delete($data->gambar);
        }

        $data->forceDelete();

        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);

        return to_route('dasbor.informasilingkungan.trash');

    }

}