@extends('layouts.app')

@section('title', 'Videojuegos')

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
<div class="container py-5">

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold mb-4">Videojuegos Populares</h1>
            <p class="lead">
                ¡Descubre algunos de los lanzamientos recientes más emocionantes!
            </p>

            <a href="{{ url('/') }}" class="btn btn-outline-secondary mt-3">
                ← Volver al Menú
            </a>
        </div>

        <div class="col-md-6 text-center">
           <img src="{{ asset('images/videojuegos/banner.jpg') }}" class="img-fluid rounded" alt="Videojuegos">
        </div>
    </div>

    <div class="row">
        <x-card 
            title="Resident Evil: Requiem"
            image="{{ asset('imagenes/videojuegos/umbrella.png') }}"
        >30 años después, Leon S Kennedy regresa para investigar una serie de muertes relacionadas con los sobrevivientes de Racoon City.</x-card>

        <x-card 
            title="Hollow Knight: SilkSong"
            image="{{ asset('imagenes/videojuegos/Seda.jpg') }}"
        >Emprende una épica aventura, luchando con agilidad y explorando paisajes corrompidos por la seda.</x-card>

        <x-card 
            title="Minecraft"
            image="{{ asset('imagenes/videojuegos/UPDATE.jpg') }}"
        >Sobrevive, explora, y crea en un mundo sin límites. ¡La nueva actualización introduce lanzas, Nautilus y monturas Zombi! </x-card>
    </div>

</div>
@endsection