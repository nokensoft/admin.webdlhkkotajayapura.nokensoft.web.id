<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->orWhere('email', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',1)->latest()->paginate(5);


        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::where('status', 0)->count();
        $datapublish = User::where('status', 1)->count();
        return view('panel.admin.pages.users.index',compact('data','jumlahtrash','jumlahdraft','datapublish'))
            ->with('i', ($request->input('page', 1) - 1) * 5);



    }

    public function draft(Request $request)
    {
        $data = User::where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->orWhere('email', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status',0)->latest()->paginate(5);

        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::where('status', 0)->count();
        $datapublish = User::where('status', 1)->count();
        return view('panel.admin.pages.users.index',compact('data','jumlahtrash','jumlahdraft','datapublish'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('display_name','display_name')->all();
        return view('panel.admin.pages.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required',
            'status' => 'required'
        ],
        [
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'password.same' => 'Password tidak sama',
            'roles.required' => 'Role tidak boleh kosong',
            'status.required' => 'Status tidak boleh kosong',
        ]

    );

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('app.users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('panel.admin.pages.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

        return view('panel.admin.pages.users.edit',compact('user','roles','userRole'));
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        Hash::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('app.users');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->status = 0;
        $data->save();
        User::find($id)->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->back();
    }



    public function trash(){
        $datas = User::onlyTrashed()->paginate(5);
        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::where('status', 0)->count();
        $datapublish = User::where('status', 1)->count();
        return view('panel.admin.pages.users.trash',compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function restore($id){
        User::withTrashed()->where('id',$id)->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->back();
    }


    public function delete($id){
        User::withTrashed()->where('id',$id)->forceDelete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->back();
    }

}
