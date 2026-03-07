@extends('layouts.app')

@section('title', 'Series')

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

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold mb-4">Series Recomendadas</h1>
            <p class="lead">
                ¡Explora diversidad de series que no te puedes perder!
            </p>

            <a href="{{ url('/') }}" class="btn btn-outline-secondary mt-3">
                ← Volver al Menú
            </a>
        </div>

        <div class="col-md-6 text-center">
           <img src="{{ asset('images/series/banner.jpg') }}" class="img-fluid rounded" alt="Series">
        </div>
    </div>

    <div class="row">
        <x-card 
            title="Eso: Bienvenidos a Derry"
            image="{{ asset('imagenes/series/Hunter.jpg') }}"
            >Visita el pasado de la ciudad que todos se mueren por ver. La amarás tanto que nunca te irás.</x-card>
        <x-card 
            title="Andor (Segunda Temporada)"
            image="{{ asset('imagenes/series/Andor.jpeg') }}"
            >El viaje de Cassian continúa mientras la Alianza Rebelde se consolida en contra del Imperio.</x-card>
        <x-card 
            title="The Studio"
            image="{{ asset('imagenes/series/Hollywood.jpg') }}"
        >Sigue a un director de TV en su caótico esfuerzo por salvar la productora mientras batalla con Hollywood.</x-card>
    </div>

</div>
@endsection