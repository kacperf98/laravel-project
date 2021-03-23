<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;

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
Route::view('/', 'welcome');

Route::view('about', 'about');

Route::get('posts', [PostsController::class, 'index'])->name('posts.index');
Route::post('posts', [PostsController::class, 'store']);
Route::get('posts/create', [PostsController::class, 'create']);
Route::get('posts/{post}', [PostsController::class, 'show'])->name('posts.show');
Route::get('posts/{post}/edit', [PostsController::class, 'edit']);
Route::put('posts/{post}', [PostsController::class, 'update']);


Route::get('users', [UsersController::class, 'index']);
Route::post('users', [UsersController::class, 'store']);
Route::get('users/create', [UsersController::class, 'create']);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
