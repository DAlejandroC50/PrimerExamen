@extends('layouts.app')

@section('title', 'Películas')

@section('content')
<div class="container py-5">

    {{-- Encabezado --}}
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold mb-4">Películas Populares</h1>
            <p class="lead">
                Descubre algunas de las películas más vistas y aclamadas por la crítica.
            </p>

            <a href="{{ url('/') }}" class="btn btn-outline-secondary mt-3">
                ← Volver al Menú
            </a>
        </div>

        <div class="col-md-6 text-center">
           <img src="{{ asset('images/peliculas/banner.jpg') }}" class="img-fluid rounded" alt="Películas">
        </div>
    </div>

    {{-- Lista de tarjetas --}}
    <div class="row">
        <x-card 
            title="Inception"
            text="Un thriller de ciencia ficción sobre sueños y realidades."
            image="{{ asset('images/peliculas/inception.jpg') }}"
        />
        <x-card 
            title="The Matrix"
            text="La película que redefine la realidad virtual y la acción."
            image="{{ asset('images/peliculas/matrix.jpg') }}"
        />
        <x-card 
            title="Interstellar"
            text="Exploración del espacio y del tiempo con un drama familiar."
            image="{{ asset('images/peliculas/interstellar.jpg') }}"
        />
    </div>

</div>
@endsection