
@extends('plantillas.app')


@section('contenido')


    <ul>
      @foreach ($genres as $key => $generos)
        <li>{{$generos->name}}</a>
    
      @endforeach
    </ul>
@endsection
