@extends('plantillas.app')


@section('contenido')



    @foreach ($actors as $key => $actorNombre)
      <li><a href="detalleactor/{{$actorNombre->id}}">{{$actorNombre->first_name.":".$actorNombre->last_name}}</a></li>
    @endforeach


  @endsection


