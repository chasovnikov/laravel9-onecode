<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        // $ip = $request->ip();
        // $path = $request->path();
        // $url = $request->url();
        // $full = $request->fullUrl();
        // dd($request->is('foo'));
        // dd($request->routeIs('foo'));

        return view('login.index');
    }

    public function store()
    {
        return redirect()->route('user');
    }
}
