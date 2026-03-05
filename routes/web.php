<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\VideosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peliculas', [PeliculasController::class, 'index']);
Route::get('/series', [SeriesController::class, 'index']);
Route::get('/videos', [VideosController::class, 'index']);
