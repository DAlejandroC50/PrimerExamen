@extends('layouts.app')

@section('title', 'Series')

@section('content')
<div class="container py-5">

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold mb-4">Series Recomendadas</h1>
            <p class="lead">
                Explora algunas series populares que no te puedes perder.
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
            title="Stranger Things"
            text="Aventura y misterio en un pequeño pueblo lleno de secretos."
            image="{{ asset('images/series/stranger_things.jpg') }}"
        />
        <x-card 
            title="Breaking Bad"
            text="El viaje de un profesor de química convertido en fabricante de metanfetamina."
            image="{{ asset('images/series/breaking_bad.jpg') }}"
        />
        <x-card 
            title="The Mandalorian"
            text="Una serie del universo Star Wars centrada en un cazarrecompensas."
            image="{{ asset('images/series/mandalorian.jpg') }}"
        />
    </div>

</div>
@endsection