<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;

Route::resource('/posts', PostsController::class);
Route::resource('/comments', CommentsController::class);

Route::get('/', function () {
    return view('home');
});
