<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        // dd(session()->has('test'));
        // if ($test = session('test')) {
        //     action($test);
        // }
        // $all = session()->all();
        // $foo = session('foo');
        // dd($all);

        return view('login.index');
    }

    public function store()
    {
        // session()->put('foo', 'bar');
        // session(['foo' => 'bar']);
        // session()->forget('foo');
        // session()->flush();
        // session(['alert' => __('Добро пожаловать')]);

        alert(__('Добро пожаловать'), 'danger');

        return redirect()->route('user');
    }
}
