@extends('layouts.app')

@section('content')

<h1>Películas</h1>

@foreach($peliculas as $pelicula)
    <x-tarjeta :titulo="$pelicula['titulo']" :imagen="$pelicula['imagen']"/>
@endforeach

@endsection