<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;

/*
 *
 * TODO
 *
 * Add Tags in posts edit;
 * Add option to delete users and posts;
 *
 */

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

Route::view('/', 'welcome')->name('index');
Route::view('/about', 'about')->name('about');

Route::group(['prefix' => 'posts', 'as' => 'posts.'], function ()
{
    Route::get('/', [PostsController::class, 'index'])->name('index');
    Route::post('/', [PostsController::class, 'store'])->name('store');
    Route::get('/create', [PostsController::class, 'create'])->name('create')->middleware('auth');
    Route::get('/{post}', [PostsController::class, 'show'])->name('show');
    Route::get('/{post}/edit', [PostsController::class, 'edit'])->name('edit')->middleware('auth');
    Route::put('/{post}', [PostsController::class, 'update'])->name('update');
});

Route::group(['prefix' => 'users', 'as' => 'users.'], function ()
{
    Route::get('/', [UsersController::class, 'index'])->name('index');
    Route::post('/', [UsersController::class, 'store'])->name('store');
    Route::get('/create', [UsersController::class, 'create'])->name('create')->middleware('auth');
    Route::get('/{user}/edit', [UsersController::class, 'edit'])->name('edit')->middleware('auth');
    Route::put('/{user}', [UsersController::class, 'update'])->name('update');
});

Auth::routes();
Route::get('home', [\App\Http\Controllers\HomeController::class, 'index']);
