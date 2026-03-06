<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\VideojuegosController;

Route::get('/', function () {
    return view('menu');
});

Route::get('/peliculas', [PeliculasController::class, 'index'])->name('peliculas');

Route::get('/series', [SeriesController::class, 'index'])->name('series');

Route::get('/videojuegos', [VideojuegosController::class, 'index'])->name('videojuegos');
