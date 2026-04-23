@extends('layouts.app')
@section('contenido')
<h2>Resultado</h2>
<p>Nombre: {{ $nombre }}</p>
<p>Edad: {{ $edad }}</p>
<p>Ocupación: {{ $ocupacion }}</p>
<h3>{{ $mensaje }}</h3>
<a href="/">Volver</a>
@endsection