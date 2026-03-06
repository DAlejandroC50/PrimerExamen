@extends('layouts.app')

@section('title', 'Inicio | UADY')
@section('content')

{{-- Hero principal --}}
<div class="bg-light p-5 rounded mb-5 text-center">
    <h1 class="fw-bold display-5">Bienvenidos a la UADY</h1>
    <p class="lead mt-3">
        Proyecto de Tecnología Web 
    </p>
</div>
{{-- Sección informativa --}}
<div class="row text-center mb-5">

    <x-section-button
        title="Educación"
        text="Formación académica de calidad en licenciaturas y posgrados."
        route="educacion"
        color="primary"
    />

    <x-section-button
        title="Investigación"
        text="Desarrollo de proyectos científicos y tecnológicos con impacto social."
        route="investigacion"
        color="success"
    />

    <x-section-button
        title="Compromiso Social"
        text="Vinculación con la sociedad a través de cultura, deporte y extensión."
        route="compromiso"
        color="warning"
    />

</div>

{{-- Llamada a la acción --}}
<div class="text-center">
    <a href="/nosotros" class="btn btn-primary btn-lg">
        Conoce más sobre nosotros
    </a>
</div>
@endsection