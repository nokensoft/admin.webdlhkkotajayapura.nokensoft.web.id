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
    public function show($slug)
    {
        $data = Pengaturan::whereId(1)->first();
        return view('dasbor.admin.pages.pengaturan.show', compact('data'));
    }

    public function edit()
    {

        $data = Pengaturan::whereId(1)->first();
        return view('dasbor.admin.pages.pengaturan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                // 'judul_situs'                   => 'required',
                // 'deskripsi_situs'               => 'required',
                // 'logo_situs'                    => 'required|image|mimes:png|max:4096',
                // 'favicon'                       => 'required|image|mimes:png|max:4096',
                // 'alamat_email'                  => 'required',
                // 'nomor_telepon'                 => 'required',
                // 'alamat_google_map'             => 'required',
                // 'copyright'                     => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $random                             = Str::random(15);
                $pengaturan                         = Pengaturan::find($id);

                if(isset($request->inputGroup) && $request->inputGroup == 'informasi-situs'){

                    // deskripsi situs
                    $pengaturan->judul_situs        = $request->judul_situs;
                    $pengaturan->deskripsi_situs    = $request->deskripsi_situs;
                    $pengaturan->copyright          = $request->copyright;

                } elseif (isset($request->inputGroup) && $request->inputGroup == 'informasi-kontak'){

                    // informasi kontak
                    $pengaturan->alamat_email       = $request->alamat_email;
                    $pengaturan->nomor_telepon      = $request->nomor_telepon;
                    $pengaturan->alamat_kantor      = $request->alamat_kantor;
                    $pengaturan->alamat_google_map  = $request->alamat_google_map;

                } elseif (isset($request->inputGroup) && $request->inputGroup == 'logo'){

                    // logo 

                    if(!empty($request->logo)) {

                        $pengaturan->logo = $request->logo;

                        $logoName = 'logo' . '.' . $request->logo->extension();
                        $path = public_path('gambar/pengaturan/');
                        if (!empty($request->logo) && file_exists($path . '/' . $request->logo)) :
                            unlink($path . '/' . $request->logo);
                        endif;
                        $pengaturan->logo = $logoName;
                        $request->logo->move(public_path('gambar/pengaturan/'), $logoName);

                    }

                    if(!empty($request->logo_loader)) {

                        $pengaturan->logo_loader = $request->logo_loader;

                        $logo_loader_name = 'logo-loader' . '.' . $request->logo_loader->extension();
                        $path = public_path('gambar/pengaturan/');
                        if (!empty($request->logo_loader) && file_exists($path . '/' . $request->logo_loader)) :
                            unlink($path . '/' . $request->logo_loader);
                        endif;
                        $pengaturan->logo_loader = $logo_loader_name;
                        $request->logo_loader->move(public_path('gambar/pengaturan/'), $logo_loader_name);

                    }   
                    
                    if(!empty($request->favicon)) {

                        $pengaturan->favicon = $request->favicon;

                        $favicon_name = 'favicon' . '.' . $request->favicon->extension();
                        $path = public_path('gambar/pengaturan/');
                        if (!empty($request->favicon) && file_exists($path . '/' . $request->favicon)) :
                            unlink($path . '/' . $request->favicon);
                        endif;
                        $pengaturan->favicon = $favicon_name;
                        $request->favicon->move(public_path('gambar/pengaturan/'), $favicon_name);

                    }   

                }  elseif (isset($request->inputGroup) && $request->inputGroup == 'media-sosial'){

                    // media sosial
                    $pengaturan->instagram          = $request->instagram;
                    $pengaturan->facebook           = $request->facebook;
                    $pengaturan->twitter            = $request->twitter;
                    $pengaturan->tiktok             = $request->tiktok;
                    $pengaturan->linkedin           = $request->linkedin;
                    $pengaturan->youtube            = $request->youtube;

               } 

                $pengaturan->update();

                Alert::toast('Pengaturan Berhasil diperbarui!', 'success');
                return redirect()->route('dasbor.pengaturan');

            } catch (\Throwable $th) {

                // dd($th);
                Alert::toast('Gagal', 'error');
                return redirect()->back();

            }
        }
    }
}
