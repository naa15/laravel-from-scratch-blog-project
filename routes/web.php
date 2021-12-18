<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;

/*
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('show');
Route::post('posts/{post:slug}/comments', [CommentController::class, 'store'])->name('comment');

Route::post('newsletter', NewsletterController::class)->name('newsletter');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest')->name('register');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest')->name('login');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');

Route::middleware('can:admin')->group(function () {
	// another way:
	// Route::resource('admin/posts', AdminPostController::class)->except('show');
	Route::post('admin/posts', [AdminPostController::class, 'store'])->name('admin.posts');
	Route::get('admin/posts/create', [AdminPostController::class, 'create'])->name('admin.posts.create');
	Route::get('admin/posts', [AdminPostController::class, 'index'])->name('admin.posts');
	Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->name('admin.posts.edit');
	Route::patch('admin/posts/{post}', [AdminPostController::class, 'update'])->name('admin.posts.update');
	Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy'])->name('admin.posts.delete');
});
