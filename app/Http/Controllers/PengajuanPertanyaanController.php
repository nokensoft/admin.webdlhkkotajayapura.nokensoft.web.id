<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PengajuanPertanyaan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PengajuanPertanyaanController extends Controller
{

    public function index(){
        $datas = PengajuanPertanyaan::orderBy('id','desc')->paginate(5);
        $jumlahtrash = PengajuanPertanyaan::onlyTrashed()->count();
        $datapublish = PengajuanPertanyaan::count();
        return view('panel.admin.pages.pengajuan.index',compact('datas','jumlahtrash','datapublish'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function trash()
    {
        $datas = PengajuanPertanyaan::onlyTrashed()->paginate(5);
        $jumlahtrash = PengajuanPertanyaan::onlyTrashed()->count();
        return view('panel.admin.pages.pengajuan.trash',compact('datas')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function pengajuanPertanyaanStore(Request $request) {
        $validator = Validator::make(
            $request->all(),
            [
                'nama'             => 'required',
                'email'            => 'required|email',
                'no_telf'          => 'required|string',
                'judul_topik'      => 'required',
                'keterangan'       => 'required',
            ],[
                'nama.required'     => 'Nama tidak boleh kosong',
                'email.required'     => 'Email tidak boleh kosong',
                'no_telf.required'     => 'Nomor Telfon tidak boleh kosong',
                'judul_topik.required' => 'Judul topik tidak boleh kosong',
                'keterangan.required' => 'Rincian pertanyaan  tidak boleh kosong'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $random = Str::random(15);
                $pengajuan = new PengajuanPertanyaan();
                $pengajuan->nama = $request->nama;
                $pengajuan->email = $request->email;
                $pengajuan->no_telf = $request->no_telf;
                $pengajuan->judul_topik = $request->judul_topik;
                $pengajuan->keterangan = $request->keterangan;
                $pengajuan->slug = $random;
                $pengajuan->save();
                alert()->success('Terima Kasih', 'Sukses!!')->autoclose(1200);
                return redirect()->back();
            } catch (\Throwable $th) {
                Alert::toast('Oppss Ada yang salah', 'error');
                return redirect()->back();
            }
        }
    }

    public function show($id){
        $data = PengajuanPertanyaan::where('slug',$id)->first();
        return view('panel.admin.pages.pengajuan.show',compact('data'));
    }

    public function destroy($id)
    {
        $data = PengajuanPertanyaan::findOrFail($id);
        $data->delete();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1200);
        return redirect()->back();
    }

    public function restore($id){
        $data = PengajuanPertanyaan::onlyTrashed()->where('id',$id);
        $data->restore();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1200);
        return redirect()->back();
    }

    public function delete($id)
    {
        $data = PengajuanPertanyaan::onlyTrashed()->findOrFail($id);
        $data->forceDelete();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);
        return to_route('app.pengajuan.trash');

    }

}
