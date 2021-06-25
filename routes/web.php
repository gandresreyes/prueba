<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('proyectos',[ProyectoController::class, 'index'])->middleware('auth');