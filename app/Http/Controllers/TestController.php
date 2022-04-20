<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __constructor()
    {
        // автоматически зарегистрирует мидлвар для всех методов
        // $this->middleware('token');
        $this->middleware('throttle:10');   // 10 запросов в минуту
    }

    public function __invoke()
    {
        return 'test1';
    }
}
