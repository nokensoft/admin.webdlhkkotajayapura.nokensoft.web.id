<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class UserController extends Controller
{

    // INDEX
    public function index(Request $request)
    {
        $datas = User::where([

            [function ($query) {
                if (($s = request()->s)) {
                    $query
                        ->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->orWhere('description', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest()->paginate(10);

        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::where('status', 'Draft')->count();
        $datapublish = User::where('status', 'Publish')->count();

        return view('dasbor.admin.users.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    // DRAFT
    public function draft()
    {

        $datas = User::where([
            ['name', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query
                        ->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->orWhere('description', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'draft')->latest()->paginate(10);
        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::where('status', 'draft')->count();
        $datapublish = User::where('status', 'publish')->count();

        return view('dasbor.admin.users.index', compact(
            'datas',
            'jumlahtrash',
            'jumlahdraft',
            'datapublish'
        ))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // TRASH
    public function trash()
    {
        $datas = User::onlyTrashed()->paginate(10);
        return view('dasbor.admin.users.trash', compact('datas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // CREATE
    public function create()
    {
        // $roles = Role::pluck('name', 'name')->all();
        $roles  = Role::get();
        return view('dasbor.admin.users.create', compact('roles'));
    }

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'           => 'required',
                'status'         => 'required',
                'email'          => 'required|email|unique:users,email',
                'password'       => 'required|confirmed|min:8',
                'peran'          => 'required',
                'slug'           => 'unique:users,slug',
                // 'picture'        => 'required|image|mimes:jpeg,png,jpg|max:4096',

            ],
            [
                'slug.unique'                  => 'Data sudah ada!',
                'name.required'                => 'Nama  tidak boleh kosong!',
                'status.required'              => 'Status  tidak boleh kosong!',
                'peran.required'               => 'Peran  tidak boleh kosong!',
                'email.required'               => 'Email  tidak boleh kosong!',
                'email.unique'                 => 'Email  sudah digunakan,Silakan gunakan email yang lain!',
                // 'picture.mimes'                => 'Gambar harus dengan jenis PNG,JPG,JPEG!',
                // 'picture.required'             => 'Gambar tidak  boleh kosong!',

                'password.required'                => 'Kata sandi  tidak boleh kosong!',
                'password.confirmed'               => 'Konfirmasi kata sandi tidak cocok!',
                'password_confirmation.required'   => 'Konfirmasi Kata sandi  tidak boleh kosong!',
                'password.min'                     => 'Kata sandi minimal 8 karakter',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = new User();
                $data->name = $request->name;
                $data->slug = Str::slug($data->name).'-'.time();
                $data->email = $request->email;
                $data->status = $request->status;
                $data->password = bcrypt($request->password);

                if(!empty($request->picture)) {

                    $posterName = Str::slug($request->name) . '.' . $request->picture->extension();
                    $path = public_path('gambar/pengguna');
                    if (!empty($data->picture) && file_exists($path . '/' . $data->picture)) :
                        unlink($path . '/' . $data->picture);
                    endif;
                    $data->picture = $posterName;

                    $request->picture->move(public_path('gambar/pengguna'), $posterName);
                }

                $data->assignRole($request->peran);
                $data->save();

                Alert::toast('Berhasil dibuat!', 'success');
                return redirect('dasbor/pengguna/' . $data->slug . '/detail');

            } catch (\Throwable $th) {
                // dd($th);
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // SHOW
    public function show($id)
    {
        $user = User::where('slug', $id)->first();
        $roles  = Role::get();
        return view('dasbor.admin.users.show', compact('user', 'roles'));
    }

    // EDIT
    public function edit($id)
    {
        $data   = User::where('slug', $id)->first();
        // $roles  = Role::pluck('name', 'name')->all();
        $roles  = Role::get();
        return view('dasbor.admin.users.edit', compact('data', 'roles'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'           => 'required',
                'status'         => 'required',
                // 'email'          => 'required|email|unique:users,email',
                'password'       => 'confirmed',
                // 'peran'          => 'required',
                // 'slug'           => 'unique:users,slug',
                // 'picture'        => 'required|image|mimes:jpeg,png,jpg|max:4096',

            ],
            [
                'slug.unique'                  => 'Data sudah ada!',
                'name.required'                => 'Nama  tidak boleh kosong!',
                'status.required'              => 'Status  tidak boleh kosong!',
                'peran.required'               => 'Peran  tidak boleh kosong!',
                // 'email.required'               => 'Email  tidak boleh kosong!',
                // 'email.unique'                 => 'Email  sudah digunakan,Silakan gunakan email yang lain!',
                // 'picture.mimes'                => 'Gambar harus dengan jenis PNG,JPG,JPEG!',
                // 'picture.required'             => 'Gambar tidak  boleh kosong!',

                // 'password.required'                => 'Kata sandi  tidak boleh kosong!',
                'password.confirmed'               => 'Konfirmasi kata sandi tidak cocok!',
                // 'password_confirmation.required'   => 'Konfirmasi Kata sandi  tidak boleh kosong!',
                // 'password.min'                     => 'Kata sandi minimal 8 karakter',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = User::find($id);
                $data->name = $request->name;
                $data->email = $request->email;
                $data->status = $request->status;
                $data->slug = Str::slug($request->name).'-'.time();

                if (!empty($request->password)) {
                    $data->password = bcrypt($request->password);
                }

                if ($request->picture) {

                    $imageName = Str::slug($request->name) . '.' . $request->picture->extension();
                    $path = public_path('gambar/pengguna');
                    if (!empty($data->picture) && file_exists($path . '/' . $data->picture)) :
                        unlink($path . '/' . $data->picture);
                    endif;
                    $data->picture = $imageName;
                    $request->picture->move(public_path('gambar/pengguna'), $imageName);
                }
                
                $data->assignRole($request->peran);
                $data->update();

                Alert::toast('Berhasil diubah!', 'success');
                return redirect('dasbor/pengguna/' . $data->slug . '/detail');
            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Failed', 'error');
                return redirect()->back();
            }
        }
    }

    // DESTROY
    public function destroy($id)
    {
        $data = User::find($id);
        if ($data->delete()) {
            //return success with Api Resource
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
            return redirect()->back();
        }
    }


    // RESTORE
    public function restore($id)
    {
        $data = User::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->back();
    }

    // DELETE
    public function delete($id)
    {
        $data = User::onlyTrashed()->findOrFail($id);
        
        $path = public_path('gambar/pengguna/' . $data->picture);

        if (file_exists($path)) {
            File::delete($path);
        }

        $data->forceDelete();
        alert()->success('Proses Berhasil', 'Sukses!!')->autoclose(1500);
        return to_route('dasbor.pengguna.trash');
    }


}
