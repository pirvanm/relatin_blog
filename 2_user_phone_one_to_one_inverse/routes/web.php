<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\PhonesController;

Route::resource('users', UsersController::class);
Route::resource('phones', PhonesController::class);

Route::get('/', function () {
    return view('home');
});
