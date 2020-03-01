@extends('plantillas.app')



@section('contenido')



  <ul>
    <h2>Pelicula Elegida</h2>
          <li>Titulo:{{$peliculadetalle->title}}</li>
          <li>Rating:{{$peliculadetalle->rating}}</li>
          <li>Permios:{{$peliculadetalle->awards}}</li>
          <li>Duracion:{{$peliculadetalle->length}}</li>
          <li>Fecha de Estrono:{{$peliculadetalle->release_date}}</li>
          <li>Genero: @if ($peliculadetalle->genre){{$peliculadetalle->genre->name }}@else
              La Pelicula no tiene un Genero
          @endif</li>

       



          </ul>
      
   


      <a href="/movies/{{$peliculadetalle->id}}/editarMovies">Editar</a>
      @endsection
