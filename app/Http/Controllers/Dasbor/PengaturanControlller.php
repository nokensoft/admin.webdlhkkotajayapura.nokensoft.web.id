<?php

namespace App\Http\Controllers\Dasbor;

use App\Models\Pengaturan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PengaturanControlller extends Controller
{
    public function index()
    {

        $data = Pengaturan::whereId(1)->first();
        return view('dasbor.admin.pages.pengaturan.index', compact('data'));
    }
    public function show($id)
    {

        $data = Pengaturan::where('slug', $id)->first();
        return view('panel.admin.pages.pengaturan.show', compact('data'));
    }
    public function edit($id)
    {

        $data = Pengaturan::where('slug', $id)->first();
        return view('panel.admin.pages.pengaturan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'judul_situs'             => 'required',
                'deskripsi_situs'         => 'required',
                'logo_situs'              => 'required|image|mimes:png|max:4096',
                'favicon'                 => 'required|image|mimes:png|max:4096',
                'alamat_email'            => 'required',
                'nomor_telepon'           => 'required',
                'alamat_google_map'       => 'required',
                'copyright'               => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $random = Str::random(15);

                $pengaturan = Pengaturan::find($id);
                $pengaturan->judul_situs = $request->judul_situs;
                $pengaturan->deskripsi_situs = $request->deskripsi_situs;
                $pengaturan->alamat_email = $request->alamat_email;
                $pengaturan->nomor_telepon = $request->nomor_telepon;
                $pengaturan->alamat_kantor = $request->alamat_kantor;
                $pengaturan->alamat_google_map = $request->alamat_google_map;
                $pengaturan->facebook = $request->facebook;
                $pengaturan->instagram = $request->instagram;
                $pengaturan->linkedin = $request->linkedin;
                $pengaturan->twitter = $request->twitter;
                $pengaturan->youtube = $request->youtube;
                $pengaturan->copyright = $request->copyright;
                $pengaturan->slug = $random;

                // Logo
                $imageName = time() . '.' . $request->logo_situs->extension();
                $path = public_path('file/cms/image/logo');
                if (!empty($pengaturan->logo_situs) && file_exists($path . '/' . $pengaturan->logo_situs)) :
                    unlink($path . '/' . $pengaturan->logo_situs);
                endif;
                $pengaturan->logo_situs = $imageName;
                $request->logo_situs->move(public_path('file/cms/image/logo'), $imageName);

                // Logo
                $imageName = time() . '.' . $request->favicon->extension();
                $path = public_path('file/cms/image/favicon');
                if (!empty($pengaturan->favicon) && file_exists($path . '/' . $pengaturan->favicon)) :
                    unlink($path . '/' . $pengaturan->favicon);
                endif;
                $pengaturan->favicon = $imageName;
                $request->favicon->move(public_path('file/cms/image/favicon'), $imageName);

                $pengaturan->update();
                Alert::toast('Pengaturan Berhasil diperbarui!', 'success');
                return redirect()->route('dasbor.pengaturan');
            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }
}
