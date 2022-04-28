<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/', 'welcome', ['name' => 'Max'])->name('home');
Route::view('/', 'home.index')->name('home');

Route::redirect('/home', '/', 301)->name('home.redirect');

Route::get('/test', TestController::class)->name('test');
// ->middleware('token:secret,foo');

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login.store');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('blog', 'index')->name('blog');
    Route::get('blog/{post}', 'show')->name('blog.show');
    Route::post('blog/{post}/like', 'like')->name('blog.like');
});

Route::resource('posts/{post}/comments', CommentController::class)->only([
    'index', 'show',
]);

// Route::resource('posts', PostController::class)->only(['index', 'show']);

// д.б. в самом низу.  Вместо 404
// Route::fallback(function () {
//     return 'fallback';
// });
