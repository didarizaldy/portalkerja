<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function informatika()
    {
        if (Auth::check()) {
            $user = Auth::user()->name;
        } else {
            $user = '';
        }
        $posts = Post::where('categories', '=', 'informatika')->paginate(9);
        $category = Post::select('categories')->where('categories', '=', 'informatika')->first();
        $cat = $category['categories'];

        return view('contents.categories.informatika', compact(
            'user',
            'posts',
            'cat'
        ));
    }

    public function elektro()
    {
        if (Auth::check()) {
            $user = Auth::user()->name;
        } else {
            $user = '';
        }
        $posts = Post::where('categories', '=', 'elektro')->paginate(9);
        $category = Post::select('categories')->where('categories', '=', 'elektro')->first();
        $cat = $category['categories'];

        return view('contents.categories.elektro', compact(
            'user',
            'posts',
            'cat'
        ));
    }

    public function mesin()
    {
        if (Auth::check()) {
            $user = Auth::user()->name;
        } else {
            $user = '';
        }
        $posts = Post::where('categories', '=', 'mesin')->paginate(9);
        $category = Post::select('categories')->where('categories', '=', 'mesin')->first();
        $cat = $category['categories'];

        return view('contents.categories.mesin', compact(
            'user',
            'posts',
            'cat'
        ));
    }
}
