<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // общие переменные для всех страниц
        View::share('date', date('Y'));

        // только для роутов 'user*'
        View::composer('user*', function ($view) {
            $view->with('balance', 12345);
        });
    }
}
