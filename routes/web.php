<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrincipalController;

Route::get('/hello',HomeController::class);
Route::get('post/mensaje',[PostController::class, 'Mensaje']);
Route::get('post/about/{param}/{name}', [PostController::class, 'About']);
Route::get('post/contacto', [PostController::class,'Contacto']);
Route::get('/Principal',[PrincipalController::class,'index']);
Route::get('Llamado',[PostController::class, 'llamado_componente']);

Route::get('/principalpagina',[PostController::class,'principal']);

Route::get('/', function () {
    return view('welcome');
});