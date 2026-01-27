<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrincipalController;

Route::get('/hello',HomeController::class);
Route::get('/about', [PostController::class, 'About']);
Route::get('/', function () {
    return view('welcome');
});