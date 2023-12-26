<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ErrorController extends Controller
{
    public function notFound()
    {
        // if (Auth::check()) {
            $user = Auth::user()->name;
        } else {
            $user = '';
        }

        // return view('errors.404', compact('user'));
        return view('errors.404');
    }
}
