<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        // $data = $request->all();
        // $data = $request->only('name', 'email');
        // $data = $request->except('name', 'email');
        // $name = $request->name;
        // $email = $request->input('email');
        // $avatar = $request->file('avatar');
        // $request->has('name');
        // $request->filled('name'); // заполнен?
        // $request->missing('name'); // не заполнен?

        $email = $request->input('email');
        $password = $request->input('password');
        $agreement = $request->boolean('agreement');

        // dd($name);

        return 'register.store';
    }
}
