
@extends('plantillas.app')


@section('contenido')


    <ol>
      @foreach ($genres as $key => $generos)
        <li>{{$generos->name}}</li>
      @endforeach
    </ol>
@endsection
