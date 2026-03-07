@extends('layouts.app')

@section('title', 'Películas')

@push('css') 
<style>
.card:hover {
    transform: translateY(-5px);
    transition: 0.3s;
}
</style>
@endpush

@section('content')
<div class="container py-5">

    {{-- Encabezado --}}
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold mb-4">Películas Populares</h1>
            <p class="lead">
                ¡Descubre algunas de las películas favoritas de nuestros espectadores!
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
            >El Hombre de Acero debe ser gentil en un mundo que considera la amabilidad como algo anticuado.</x-card>

        <x-card 
            title="Transformers One"
            image="{{ asset('imagenes/peliculas/TFONE.jpg') }}"
            >El emocional origen de Optimus Prime Y Megatron, así como el inicio de la Guerra por Cybertron.</x-card>

        <x-card 
            title="28 años después"
            image="{{ asset('imagenes/peliculas/Zombies.jpg') }}"
        >En 28 días empezó. En 28 semanas se extendió. En 28 años evolucionó. El tiempo no resolvió nada.</x-card>

        <x-card 
            title="Thunderbolts*"
            image="{{ asset('imagenes/peliculas/Void.jpg') }}"
        >En el mundo post-Vengadores, un grupo de mercenarios desilusionados son reunidos para una misión donde deberán confrontar sus pasados.</x-card>
    </div>

</div>
@endsection