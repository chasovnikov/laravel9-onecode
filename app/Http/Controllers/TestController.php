<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response as FacadesResponse;

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

        // $response = app()->make('response');
        // $response = app('response');
        // $response = response();
        // $response = FacadesResponse::make('dfdf');

        // return response('test', 200, ['foo' => 'bar']);
        // return ['foo' => 'vase'];

        return response()->json(['foo' => 'vase'], 200, []);
    }
}
