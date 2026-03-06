<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideojuegosController extends Controller
{
    //
    public function index()
    {
        return view('videojuegos');
    }
}
