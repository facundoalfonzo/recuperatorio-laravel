<link rel="stylesheet"  href="<?php echo asset('css/estilos.css')?>" type="text/css">
@extends('plantillas.app')

@section('contenido')

    <ul >
      @foreach($peliculas as $id => $pelicula)
        <li ><a class="pelis"  href="/peliculas/{{$pelicula->id}}"> {{$pelicula->title}}</a></li>
        <span>{{$pelicula->rating}}</span>
      @endforeach
    </ul>

  @endsection
