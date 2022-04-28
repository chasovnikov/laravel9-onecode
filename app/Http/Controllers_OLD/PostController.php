<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StorePostRequest;
use Dotenv\Exception\ValidationException;
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

    public function store(StorePostRequest $request)
    {
        // $valideted = $request->validated();

        // $title = $request->input('title');
        // $content = $request->input('content');

        // dd($title, $content);

        if (true) {
            return back()->withInput()->with('message', __('Недостаточно средств'));
        }

        return redirect()->route('user.posts.show', 123);
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

    public function update(Request $request, $post)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        // dd($title, $content);

        return redirect()->back();
    }

    public function delete($post)
    {
        return redirect()->route('user.posts.show');
    }

    public function like()
    {
        return 'like + 1';
    }
}
