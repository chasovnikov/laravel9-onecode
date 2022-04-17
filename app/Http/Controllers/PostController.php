<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'страница: posts/index';
    }

    public function create()
    {
        return 'страница: posts/create';
    }

    public function store()
    {
        return 'страница: posts/store';
    }

    public function show($id)
    {
        return 'страница: posts/show ' . $id;
    }

    public function update()
    {
        return 'страница: posts/update';
    }

    public function edit()
    {
        return 'страница: posts/edit';
    }

    public function delete()
    {
        return 'страница: posts/delete';
    }

    public function like()
    {
        return 'like + 1';
    }
}
