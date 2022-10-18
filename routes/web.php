<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/post/{blog_post_id}', [\App\Http\Controllers\BlogpostController::class, 'show'])->name('post');
Route::get('/post/delete/{blog_post_id}', [\App\Http\Controllers\BlogpostController::class, 'deletePost'])->name('delete_post');
Route::get('/post/update/{blog_post_id}', [\App\Http\Controllers\BlogpostController::class, 'updatePost'])->name('update_post');
Route::post('/post/update', [\App\Http\Controllers\BlogpostController::class, 'update'])->name('post_update');
