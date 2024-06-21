<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
});

Route::resource('post', PostController::class)
    ->only(['index', 'store']);
 
