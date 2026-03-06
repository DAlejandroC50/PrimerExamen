@extends('layouts.app')

@section('title', 'Videojuegos')

@section('content')
<div class="container py-5">

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold mb-4">Videojuegos Populares</h1>
            <p class="lead">
                Descubre algunos de los videojuegos más jugados y aclamados.
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
            title="The Legend of Zelda: Breath of the Wild"
            text="Explora un mundo abierto lleno de aventuras."
            image="{{ asset('images/videojuegos/zelda.jpg') }}"
        />
        <x-card 
            title="God of War"
            text="Una épica aventura de acción mitológica."
            image="{{ asset('images/videojuegos/god_of_war.jpg') }}"
        />
        <x-card 
            title="Minecraft"
            text="Construye, explora y crea en un mundo sin límites."
            image="{{ asset('images/videojuegos/minecraft.jpg') }}"
        />
    </div>

</div>
@endsection