<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user()->name;
        } else {
            $user = '';
        }
        $user_role = Auth::user()->roles;

        if ($user_role == "user" || $user_role == "editor") {
            return view('errors.403', compact('user'));
        }

        // $data = User::select('id', 'name', 'npm', 'faculty', 'roles')
        //     ->orderBy('npm', 'ASC')
        //     ->get();

        return view('contents.admin.user.index', compact('user'));
        // return response()->json(
        //     $data
        // );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            $user = Auth::user()->name;
        } else {
            $user = '';
        }
        $user_role = Auth::user()->roles;
        $faculties = User::select('faculty')->distinct()->get();
        $roles = User::select('roles')->distinct()->get();

        if ($user_role == "user" || $user_role == "editor") {
            return view('errors.403', compact('user'));
        }

        return view('contents.admin.user.create', compact(
            'user',
            'faculties',
            'roles'
        ));

        // return response()->json(
        //     $faculties->faculty
        // );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user()->name;
        } else {
            $user = '';
        }

        $this->validate(
            $request,
            [
                'name'         => 'required',
                'password'     => 'required|string|min:6',
                'npm'          => 'required|numeric|unique:users,npm',
                'faculty'      => 'required',
                'roles'        => 'required'
            ],
            [
                'npm.numeric'       => 'NPM Harus Berupa Angka.',
                'npm.unique'        => 'NPM Tidak Boleh Sama.',
                'password.min'      => 'Password Minimal 6 Karakter',
                'password.max'      => 'Password Maximal 12 Karakter'
            ]
        );

        $data = User::create([
            'name'     => ucwords(strtolower($request->name)),
            'password' => bcrypt($request->password),
            'npm'      => $request->npm,
            'faculty'  => $request->faculty,
            'roles'    => $request->roles,
            'api_token'    => str_random(32),
            'remember_token'    => str_random(32),
        ]);

        // return response()->json(
        //     $data
        // );
        return redirect()->route('admin.user-create')->with('success', 'User Berhasil Dibuat...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = User::select('id', 'name', 'npm', 'faculty', 'roles')
            ->orderBy('npm', 'ASC')
            ->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
                return '
                <div class="btn-group">
                    <form action="' . route('admin.user-edit', $data->id) . '" id="edit-form">
                        ' . method_field('put') . csrf_field() . '
                        <button type="submit" class="btn btn-default" id="edit-button">
                        <i class="fas fa-edit" style="color: #0d4cba;"></i>
                        </button>
                    </form>
                    <form action="' . route('admin.user-delete', $data->id) . '" method="post" id="delete-form">
                        ' . method_field('delete') . csrf_field() . '
                        <button type="submit" class="btn btn-default" id="delete-button">
                        <i class="fas fa-trash" style="color: red;"></i>
                        </button>
                    </form>
                </div>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userid = User::findOrFail($id);
        if (Auth::check()) {
            $user = Auth::user()->name;
        } else {
            $user = '';
        }
        $user_role = Auth::user()->roles;
        $faculties = User::select('faculty')->distinct()->get();
        $roles = User::select('roles')->distinct()->get();

        if ($user_role == "user" || $user_role == "editor") {
            return view('errors.403', compact('user'));
        }

        return view('contents.admin.user.edit', compact(
            'userid',
            'user',
            'faculties',
            'roles'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userdata = User::findOrFail($id);

        $data = $userdata->update([
            'name'     => ucwords(strtolower($request->name)),
            'password' => bcrypt($request->password),
            'npm'      => $request->npm,
            'faculty'  => $request->faculty,
            'roles'    => $request->roles,
        ]);

        return redirect()->route('admin.user-list')->with('success', 'User Berhasil Di Update...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrfail($id)->delete();

        return redirect()->back()->with('error', 'Data berhasil dihapus.');
    }
}
