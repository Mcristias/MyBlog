<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


route::controller(CategoryController::class)->prefix('')->group(function(){
    route::get("/",'index');
});


route::controller(PostController::class)->prefix('categories/')->group(function(){
    route::get("/{category}",'index');
});

route::controller(CommentController::class)->prefix('comments/')->group(function(){
    route::get("/",'index');
    route::get("/{comment}",'whow');
});


route::controller(PostController::class)->prefix('posts/')->group(function(){
    route::get("/",'index');
    route::get("/{id}",'show');
});

