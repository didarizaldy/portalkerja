<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostApplicant;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class PostApplicantController extends Controller
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

        return view('contents.admin.applicant.index', compact('user'));
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
    public function show()
    {
        $data = PostApplicant::select(
            'post_applicants.id',
            'post_applicants.created_at AS applicant_submit',
            'users.name AS applicant_name',
            'users.npm AS applicant_npm',
            'users.faculty AS applicant_faculty',
            'posts.title AS post_title',
            'posts.companies AS post_company',
            'posts.categories AS post_categories',
            'posts.work_type AS post_worktype',
            'posts.worksite AS post_worksite',
            'posts.position AS post_position',
            'posts.experience AS post_experience',
            'posts.expireddate AS post_expired'
        )
            ->join('posts', 'post_applicants.id_post', '=', 'posts.id')
            ->join('users', 'post_applicants.id_user', '=', 'users.id')
            ->orderBy('post_applicants.created_at', 'ASC')
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
