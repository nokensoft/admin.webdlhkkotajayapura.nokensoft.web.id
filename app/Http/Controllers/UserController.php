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

    public function index(Request $request)
    {
        $data = User::where([

            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subjudul', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','Publish')->latest()->paginate(5);

        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::where('status', 'Draft')->count();
        $datapublish = User::where('status', 'Publish')->count();

        return view('dasbor.admin.users.index',compact('data','jumlahtrash','jumlahdraft','datapublish'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function draft(){

        $data = User::where([
            ['name', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        // ->orWhere('subjudul', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','Draft')->latest()->paginate(5);
        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::where('status', 'Draft')->count();
        $datapublish = User::where('status', 'Publish')->count();

        return view('dasbor.admin.users.index',compact(
            'data','jumlahtrash','jumlahdraft','datapublish'
            )) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function trash(){
        $datas = User::onlyTrashed()->paginate(10);
        return view('dasbor.admin.users.trash',compact('datas'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
     }

    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('dasbor.admin.users.create',compact('roles'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|same:confirm-password',
                'role_id' => 'required',
                'picture' => 'image|mimes:jpeg,png,jpg|max:4096',

            ]);

        if ($validator->fails() ) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $account = new User();
                $account->name = $request->name;
                $account->email = $request->email;
                $account->password = bcrypt($request->password);
                $account->slug = Str::slug($request->name);

                $posterName = time().'.'.$request->picture->extension();
                $path = public_path('gambar/pengguna');
                    if(!empty($account->picture) && file_exists($path.'/'.$account->picture)) :
                        unlink($path.'/'.$account->picture);
                    endif;
                $account->picture = $posterName;

                $account->save();
                $request->picture->move(public_path('gambar/pengguna'), $posterName);
                $account->assignRole($request->role_id);
                Alert::toast('Pengguna Berhasil dibuat!', 'success');
                return redirect()->route('pengguna.index');
            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }


    public function show($id)
    {
        $user = User::where('slug',$id)->first();
        return view('dasbor.admin.users.show',compact('user'));
    }


    public function edit($id)
    {
        $user = User::where('slug',$id)->first();
        $roles = Role::all();
        return view('dasbor.admin.users.edit',compact('user','roles'));
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
        [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'role_id' => 'required',
            'picture' => 'image|mimes:jpeg,png,jpg|max:4096',
        ]);

    if ($validator->fails() ) {
        return redirect()->back()->withInput($request->all())->withErrors($validator);
    } else {
        try {
            $account = User::find($id);
            $account->name = $request->name;
            $account->email = $request->email;
            $account->slug = Str::slug($request->name);
            if ($request->password) {
                $account->password = Hash::make($request->password);
            }
            if ($request->picture) {

                $imageName = time() . '.' . $request->picture->extension();
                $path = public_path('gambar/pengguna');
                if (!empty($account->picture) && file_exists($path . '/' . $account->picture)) :
                    unlink($path . '/' . $account->picture);
                endif;
                $account->picture = $imageName;
                $request->picture->move(public_path('gambar/pengguna'), $imageName);
            }
            $account->update();
            $account->syncRoles(explode(',', $request->role_id));
            Alert::toast('Pengguna Berhasil diperbarui!', 'success');
            return redirect()->route('pengguna.index');
        } catch (\Throwable $th) {
            dd($th);
            Alert::toast('Failed', 'error');
            return redirect()->back();
        }
    }
    }

    public function restore($id){
        $data = User::onlyTrashed()->where('id',$id);
        $data->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('pengguna.index');
    }

    public function delete($id) {
        $data = User::findOrFail($id);
        $data->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('pengguna.index');
    }

    public function destroy($id)
    {
        try {
            $user = User::find($id);
            $path = public_path('gambar/pengguna/' . $user->picture);

            if (file_exists($path)) {
                File::delete($path);
            }
            $user->delete();
            Alert::toast('Pengguna Berhasil dihapus', 'success');
            return redirect()->back();
        } catch (\Throwable $e) {
            Alert::toast('Failed', ['error' => $e->getMessage()], 'error');
            return redirect()->back();
        }

    }
}
