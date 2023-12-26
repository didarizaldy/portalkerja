<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            if (Auth::check()) {
                $user = Auth::user()->name;
            } else {
                $user = '';
            }
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
            ->orderBy('created_at', 'desc')->paginate(10);
        $postdata = Post::select('expireddate')->get();
        $informatika = User::where('faculty', '=', 'informatika')->count();
        $mesin = User::where('faculty', '=', 'mesin')->count();
        $elektro = User::where('faculty', '=', 'elektro')->count();
        $usertotal = User::get()->count();

        return view('home', compact(
            'user',
            'posts',
            'post',
            'informatika',
            'mesin',
            'elektro',
            'usertotal'
        ));

        // return response()->json($education);
    }
}
