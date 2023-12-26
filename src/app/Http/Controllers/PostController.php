<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostApplicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, $slug)
    {
        $posts = Post::where('slug', $slug)->first();

        $data = PostApplicant::create([
            'id_user'   => Auth::user()->id,
            'id_post'   => $posts['id'],
            'confirmed' => true,
        ]);

        return redirect()->back()->with('success', 'Berhasil Mendaftar ...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        function convertToRupiah($angka)
        {
            $rupiah = "Rp " . number_format($angka, 0, ',', '.');
            return $rupiah;
        }

        if (Auth::check()) {
            $user = Auth::user()->name;
        } else {
            $user = '';
        }
        if (Auth::check()) {
            $userid = Auth::user()->id;
        } else {
            $userid = '';
        }
        // $post = Post::find($slug);
        // $posts = Post::where('slug', $slug)->get();
        $posts = Post::select(
            'posts.*',
            'cities.name AS worksite_location',
            'companies.name AS companies_name'
        )
            ->join('cities', 'posts.worksite', '=', 'cities.id')
            ->join('companies', 'posts.companies', '=', 'companies.id')
            ->where('slug', $slug)
            ->first();
        $checkapply = PostApplicant::join('posts', 'post_applicants.id_post', '=', 'posts.id')
            ->where('post_applicants.id_post', $posts['id'])
            ->where('post_applicants.id_user', $userid)
            ->exists();
        // $post_raw = Post::where('slug', $slug)->firstOrFail();
        // $post = $posts[0];
        $salary = convertToRupiah($posts->salary);
        $val_exp = $posts->experience;
        $val_edu = $posts->graduate;

        function convertExp($val_exp)
        {
            if ($val_exp == 'fresh_graduate') {
                return "Fresh Graduate";
            } else if ($val_exp == 'oneyear') {
                return "1 Tahun";
            } else if ($val_exp == 'twoyear') {
                return "2 Tahun";
            } else if ($val_exp == 'advanced') {
                return "Berpengalaman";
            } else {
                return "";
            }
        }

        function convertEdu($val_edu)
        {
            if ($val_edu == 'sma') {
                return "SMA";
            } else if ($val_edu == 'smk') {
                return "SMK";
            } else {
                return $val_edu;
            }
        }

        $experience = convertExp($val_exp);
        $education = convertEdu($val_edu);

        return view('contents.joblist.show', compact(
            'user',
            'posts',
            'salary',
            'experience',
            'education',
            'checkapply'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $posts = Post::where('slug', $slug)->first();
        $userid = Auth::user()->id;

        $data = PostApplicant::join('posts', 'post_applicants.id_post', '=', 'posts.id')
            ->where('post_applicants.id_post', $posts['id'])
            ->where('post_applicants.id_user', $userid)
            ->delete();

        return redirect()->back()->with('error', 'Lowongan Dibatalkan...');
    }
}
