<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // $posts = [1, 2, 3, 4];

        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, nam.'
        ];

        $posts = array_fill(0, 10, $post);

        // dd($posts);

        return view('blog.index', compact('posts'));
    }

    public function show($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, nam.'
        ];

        return view('blog.show', compact('post'));
    }

    public function like($post)
    {
        return 'Blog-like';
    }
}
