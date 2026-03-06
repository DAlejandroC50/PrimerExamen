@extends('layouts.app')

@section('content')

<h1>Series</h1>

@foreach($series as $serie)
    <x-tarjeta :titulo="$serie['titulo']" :imagen="$serie['imagen']"/>
@endforeach

@endsection