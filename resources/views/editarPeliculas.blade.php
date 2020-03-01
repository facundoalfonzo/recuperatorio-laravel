@extends('plantillas.app')


@section('contenido')


<h2>editar</h2>

@if ($errors)
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
@endif
<form  action="editarMovies" method="post">
  @csrf

  <div class="">
    <label for="title">Titulo</label><br>
    <input type="text" name="title" value="">
  </div>
  <div class="">
    <label for="awards">Premios</label><br>
    <input type="number" name="awards" value="">
  </div>
<div class="">
  <label for="rating">Rating</label><br>
  <input type="numbre" name="rating" value="">
</div>

<div class="">
  <label for="release_date">Fecha de Estreno</label><br>
  <input type="date" name="release_date" value="">
</div>

<div class="">
<label for="length">Duracion</label><br>
  <input type="number" name="length" value="">
</div>

<div class="">
  <label for="genre_id">Genero</label><br>
    <input type="text" name="genre_id" value="">
  </div>
   
  <button type="submit" name="buttom">editar</button>
</form>



@endsection
