@extends('layouts.app')

@section('title', 'Películas')

@section('content')
<div class="container py-5">

    {{-- Encabezado --}}
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold mb-4">Películas Populares</h1>
            <p class="lead">
                ¡Descubre algunas de las películas más vistas por nuestros espectadores!
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
            title="Superman"
            image="{{ asset('imagenes/peliculas/Esperanza.jpg') }}"
            >El Hombre de Acero debe ser gentil en un mundo que considera la amabilidad como algo anticuado."</x-card>

        <x-card 
            title="Transformers One"
            text="La revolución de un planeta: El emocional origen de la Guerra entre Optimus Prime Y Megatron."
            image="{{ asset('imagenes/peliculas/TFONE.jpg') }}"></x-card>

        <x-card 
            title="Interstellar"
            text="Exploración del espacio y del tiempo con un drama familiar."
            image="{{ asset('imagenes/peliculas/interstellar.jpg') }}"
        />
    </div>

</div>
@endsection