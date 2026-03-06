@extends('layouts.app')

@section('title', 'Contenido Multimedia | PrimerExamen ')

@section('content')

{{-- Hero (presentacion) principal --}}
<div class="bg-light p-5 rounded mb-5 text-center">
    <h1 class="fw-bold display-5">Bienvenido a Contenido Multimedia</h1>
    <p class="lead mt-3">
        Explora nuestras secciones de Películas, Series y Videojuegos.
    </p>
</div>

{{-- Sección de botones hacia las tres vistas --}}
<div class="row text-center mb-5">

    <x-button-page
        title="Películas"
        text="Descubre las películas más populares y recomendadas."
        route="peliculas"
        color="primary"
    />

    <x-button-page
        title="Series"
        text="Explora las series más vistas y favoritas del público."
        route="series"
        color="success"
    />

    <x-button-page
        title="Videojuegos"
        text="Conoce los videojuegos más entretenidos y famosos."
        route="videojuegos"
        color="warning"
    />

</div>

@endsection