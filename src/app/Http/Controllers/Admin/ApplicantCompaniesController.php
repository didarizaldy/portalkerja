<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;
use Yajra\DataTables\Facades\DataTables;

class ApplicantCompaniesController extends Controller
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

        if ($user_role == "user") {
            return view('errors.403', compact('user'));
        }

        return view('contents.admin.applicantcompanies.index', compact('user'));
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
        $worksites = DB::select("SELECT id, name FROM cities");

        if ($user_role == "user" || $user_role == "editor") {
            return view('errors.403', compact('user'));
        }

        return view('contents.admin.applicantcompanies.create', compact(
            'user',
            'worksites'
        ));
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
                'address'      => 'required',
                'worksite'     => 'required'
            ],
            [
                'required'     => 'Data Tidak Boleh Kosong !!'
            ]
        );

        $data = Company::create([
            'name'     => ucwords(strtolower($request->name)),
            'address' => $request->address,
            'worksite'      => $request->worksite
        ]);

        // return response()->json(
        //     $data
        // );
        return redirect()->route('admin.applicant-companies-list')->with('success', 'Data Berhasil Ditambahkan...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Company::select(
            'companies.id',
            'companies.name',
            'companies.address',
            'cities.name AS worksite'
        )
            ->join('cities', 'companies.worksite', '=', 'cities.id')
            ->orderBy('companies.created_at', 'DESC')
            ->get();

        return DataTables::of($data)
            ->addColumn('action', function ($data) {
                return '
                <div class="btn-group">
                    <form action="' . route('admin.applicant-companies-edit', $data->id) . '" id="edit-form">
                        ' . method_field('put') . csrf_field() . '
                        <button type="submit" class="btn btn-default" id="edit-button">
                        <i class="fas fa-edit" style="color: #0d4cba;"></i>
                        </button>
                    </form>
                    <form action="' . route('admin.applicant-companies-delete', $data->id) . '" method="post" id="delete-form">
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Company::findOrFail($id);
        if (Auth::check()) {
            $user = Auth::user()->name;
        } else {
            $user = '';
        }

        $user_role = Auth::user()->roles;
        $worksites = DB::select("SELECT id, name FROM cities");

        if ($user_role == "user") {
            return view('errors.403', compact('user'));
        }

        return view('contents.admin.applicantcompanies.edit', compact(
            'data',
            'user',
            'worksites'
        ));
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
        $userdata = Company::findOrFail($id);

        $data = $userdata->update([
            'name'     => ucwords(strtolower($request->name)),
            'address'  => $request->address,
            'worksite' => $request->worksite
        ]);

        return redirect()->route('admin.applicant-companies-list')->with('success', 'Data Berhasil Di Update...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::findOrfail($id)->delete();

        return redirect()->back()->with('error', 'Data berhasil dihapus.');
    }
}
