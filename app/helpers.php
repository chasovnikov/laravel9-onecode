<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('test')) {
    function test()
    {
        return app('test');
    }
}

if (!function_exists('active_link')) {
    function active_link(string $route, string $active = 'active'): string
    {
        return Route::is($route) ? $active : '';
    }
}

if (!function_exists('alert')) {
    function alert(string $value, string $type = 'success'): void
    {
        session(['alert' => __($value)]);
        session(['type' => __($type)]);
    }
}

if (!function_exists('validate')) {
    function validate(array $attributes, array $rules): array
    {
        return validator($attributes, $rules)->validate();
    }
}
