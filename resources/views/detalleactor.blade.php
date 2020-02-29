@extends('plantillas.app');



@section('contenido');

<ul>
    <h2>Actor Elegido</h2>

  <li>Nombre:{{$actordetalle->first_name}}</li>
  <li>Apellido:{{$actordetalle->last_name}}</li>
  <li>pelicula Favorita: @if ($actordetalle->moviesActor)
    {{ $actordetalle->moviesActor->title  }}@else no tiene pelicula favorita
  @endif </li>
  <li>Rating:{{$actordetalle->rating}}</li>
</ul>


@endsection
