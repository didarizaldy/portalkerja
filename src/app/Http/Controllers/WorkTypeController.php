<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkTypeController extends Controller
{
    public function onsite()
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
            ->where('work_type', '=', 'onsite')
            ->paginate(9);
        $type = Post::select('work_type')->where('work_type', '=', 'onsite')->first();
        $jobtype = $type['work_type'];

        return view('contents.worktype.onsite', compact(
            'user',
            'posts',
            'jobtype'
        ));
    }

    public function remote()
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
            ->where('work_type', '=', 'remote')
            ->paginate(9);
        $type = Post::select('work_type')->where('work_type', '=', 'remote')->first();
        $jobtype = $type['work_type'];

        return view('contents.worktype.remote', compact(
            'user',
            'posts',
            'jobtype'
        ));
    }

    public function hybrid()
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
            ->where('work_type', '=', 'hybrid')
            ->paginate(9);
        $type = Post::select('work_type')->where('work_type', '=', 'hybrid')->first();
        $jobtype = $type['work_type'];

        return view('contents.worktype.hybrid', compact(
            'user',
            'posts',
            'jobtype'
        ));
    }
}
