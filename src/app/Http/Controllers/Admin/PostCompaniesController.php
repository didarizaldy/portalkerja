<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class PostCompaniesController extends Controller
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
        $companies = Post::select('companies')->distinct()->get();

        if ($user_role == "user") {
            return view('errors.403', compact('user'));
        }

        return view('contents.admin.companies.index', compact('user', 'companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $monthYear = $request->filterdate;
        $companies = $request->companies;

        if (!$monthYear) {
            // Set the default value to the current month and year
            $selectedMonth = date('m');
            $selectedYear = date('Y');
        } else {
            $selectedMonth = Carbon::createFromFormat('m-Y', $monthYear)->format('m');
            $selectedYear = Carbon::createFromFormat('m-Y', $monthYear)->format('Y');
        }

        $data = Post::selectRaw(
            'companies.name AS companies, 
            COUNT(*) as count'
        )
            ->join('companies', 'posts.companies', '=', 'companies.id')
            ->whereMonth('posts.created_at', $selectedMonth)
            ->whereYear('posts.created_at', $selectedYear);

        if ($companies) {
            $data = $data->where('companies', $companies);
        }

        $data = $data->groupBy('companies.name')
            ->get();

        return DataTables::of($data)->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
