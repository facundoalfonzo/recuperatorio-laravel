@extends('plantillas.app')



@section('contenido')


    <ul>
    @foreach ($mostrarmovies as $key => $pelicula)
      <li><a href="/detallepelicula1/{{$pelicula->id}}">{{$pelicula->title }}</a></li>
    @endforeach
    </ul>
@endsection
