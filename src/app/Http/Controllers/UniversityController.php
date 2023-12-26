<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UniversityController extends Controller
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
        $posts = Post::select(
            'posts.*',
            'cities.name AS worksite_location',
            'companies.name AS companies_name'
        )
            ->join('cities', 'posts.worksite', '=', 'cities.id')
            ->join('companies', 'posts.companies', '=', 'companies.id')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        $postdata = Post::select('expireddate')->get();
        $informatika = User::where('faculty', '=', 'informatika')->count();
        $mesin = User::where('faculty', '=', 'mesin')->count();
        $elektro = User::where('faculty', '=', 'elektro')->count();
        $usertotal = User::get()->count();

        return view('university', compact(
            'user',
            'posts',
            'post',
            'informatika',
            'mesin',
            'elektro',
            'usertotal'
        ));
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
    public function show($id)
    {
        //
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
