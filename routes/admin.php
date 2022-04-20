<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth', 'active', 'admin')->group(function () {
    Route::redirect('/', '/admin/posts')->name('admin');

    Route::get('posts', [PostController::class, 'index'])->name('admin.posts');
    // ->middleware('role:writer');
    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('admin.posts.show')->whereNumber('post');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('admin.posts.delete');
    Route::get('posts/{post}/like', [PostController::class, 'like'])->name('admin.posts.like');
});
