<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('panel.admin.users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('panel.admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|same:confirm-password',
                'role_id' => 'required'
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

                // $posterName = time() . '.' . $request->avatar->extension();
                // $path = public_path('file/users');
                // if (!empty($account->avatar) && file_exists($path . '/' . $account->avatar)) :
                //     unlink($path . '/' . $account->avatar);
                // endif;
                // $account->avatar = $posterName;
                // $request->avatar->move(public_path('file/users'), $posterName);

                $account->save();
                $account->assignRole($request->role_id);
                Alert::toast('User created successfully', 'success');
                return redirect()->route('users.index');
            } catch (\Throwable $th) {
                Alert::toast('Failed', 'error');
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
        $user = User::find($id);
        return view('panel.admin.users.show',compact('user'));
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

        return view('panel.admin.users.edit',compact('user','roles','userRole'));
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
        $validator = Validator::make($request->all(),
        [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

    if ($validator->fails() ) {
        return redirect()->back()->withInput($request->all())->withErrors($validator);
    } else {
        try {
            $account = User::find($id);
            $account->name = $request->name;
            $account->email = $request->email;
            $account->slug = Str::slug($request->name);
            if (!$request->password) {
                $account->password = bcrypt($request->password);
            }
            if($request->avatar){
                $posterName = time() . '.' . $request->avatar->extension();
                $path = public_path('file/users');
                if (!empty($account->avatar) && file_exists($path . '/' . $account->avatar)) :
                    unlink($path . '/' . $account->avatar);
                endif;
                $account->avatar = $posterName;
                $request->avatar->move(public_path('file/users'), $posterName);
            }
            $account->update();
            $account->syncRoles(explode(',', $request->roles));
            Alert::toast('User updated successfully', 'success');
            return redirect()->route('users.index');
        } catch (\Throwable $th) {
            dd($th);
            Alert::toast('Failed', 'error');
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
    public function destroy($id)
    {
        try {
            User::find($id)->delete();
            Alert::toast('User deleted successfully', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            Alert::toast('Failed', 'error');
        }

    }
}
