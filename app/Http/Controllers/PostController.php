<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function __constructor()
    // {
    //     // автоматически зарегистрирует мидлвар
    //     $this->middleware('token')->only('index', 'store');
    // }

    public function index()
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, nam.'
        ];

        $posts = array_fill(0, 10, $post);

        return view('user.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store()
    {
        return 'страница: posts/store';
    }

    public function show($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, nam.'
        ];

        return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, nam.'
        ];

        return view('user.posts.edit', compact('post'));
    }

    public function update()
    {
        return 'страница: posts/update';
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
