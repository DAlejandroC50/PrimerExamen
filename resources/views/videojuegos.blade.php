@extends('layouts.app')

@section('content')

<h1>Películas</h1>

@foreach($videos as $video)
    <x-tarjeta :titulo="$video['titulo']" :imagen="$video['imagen']"/>
@endforeach

@endsection