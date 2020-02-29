@extends('plantillas.app')


@section('contenido')


    <title>lista de actores</title>
    <ul>


    @foreach ($nombreActors as $key => $actors)
      <li>{{$actors->getNombreCompleto() }} </li>
    @endforeach
  </ul>
@endsection
