<link rel="stylesheet"  href="<?php echo asset('css/estilo.css')?>" type="text/css">

@extends('plantillas.app')

@section('contenido')

  <li class="pel">
        <h1>pelicula elegida</h1>
        <h2>{{$peliculaElegida->title}}</h2>
        <h2>rating:{{$peliculaElegida->rating}}</h2>

            <h2>premios: {{$peliculaElegida->awards}}</h2>
            <h2>fecha de estreno: {{$peliculaElegida->release_date}}</h2>

  </li>
      @endsection
