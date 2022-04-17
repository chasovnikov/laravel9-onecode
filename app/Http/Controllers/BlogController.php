<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return 'Blog-index';
    }

    public function show($post)
    {
        return 'Blog-show';
    }

    public function like($post)
    {
        return 'Blog-like';
    }
}
