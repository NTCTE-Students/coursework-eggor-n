<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActionsController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', [PostController::class,'randomPosts'])->name('');
Route::get('/createposts', function () {
    return view('createposts');})
-> middleware('auth');

Route::get('/register', function () {
    return view('register');
})-> middleware('guest');

Route::post('/register', [ActionsController::class, 'register'])
-> name('register');

Route::get('/logout', [ActionsController::class, 'logout'])
-> name('logout')-> middleware('auth');

Route::get('/login', function(){
    return view('login');
})-> middleware('guest');

Route::post('/login', [ActionsController::class, 'login'])
-> name('login');

Route::post('/createposts', [ImageController::class, 'uploadImage'])
-> name('myposts');

Route::get('/galery', [ImageController::class, 'show'])
->name('image.show');

Route::get('/deleteposts', [ImageController::class,'delete_posts'])
->name('editposts')
-> middleware('auth');

Route::post('/deleteposts', [PostController::class, 'destroy'])
-> name('destroy');

Route::get('/updateposts', [ImageController::class,'update_posts'])
->name('updateposts')
-> middleware('auth');

Route::post('/updateposts', [PostController::class,'update_posts'])
->name('update')
-> middleware('auth');
