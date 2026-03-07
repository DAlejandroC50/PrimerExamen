@extends('layouts.app')

@section('title', 'Contenido Multimedia | PrimerExamen ')
<!-- Se utiliza el stack (css) de app.blade-->
@push('css') 
<style>
/* Presentación con gradiente */
.bg-light {
    background: linear-gradient(135deg, #f0f8ff, #d9eefa);
}

/* Botones con hover */
.btn-primary:hover { transform: scale(1.05); transition: 0.3s; }
.btn-success:hover { transform: scale(1.05); transition: 0.3s; }
.btn-warning:hover { transform: scale(1.05); transition: 0.3s; }

/* Espaciado entre columnas de botones */
.row > div {
    margin-bottom: 20px;
}
</style>
@endpush

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
        text="¡Descubre las películas más populares y recomendadas!"
        route="peliculas"
        color="primary"
    />

    <x-button-page
        title="Series"
        text="¡Explora las series más vistas y favoritas del público!"
        route="series"
        color="success"
    />

    <x-button-page
        title="Videojuegos"
        text="¡Conoce los videojuegos más entretenidos y populares!"
        route="videojuegos"
        color="warning"
    />

</div>

@endsection