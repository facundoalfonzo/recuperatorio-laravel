@extends('plantillas.app')


@section('contenido')


<h2>Agregar peliculas</h2>

@if ($errors)
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
@endif
<form  action="/agregarPelicula" method="post">
  @csrf

  <div class="">
    <label for="">Titulo</label><br>
    <input type="text" name="title" value="">
  </div>
  <div class="">
    <label for="">Premios</label><br>
    <input type="number" name="awards" value="">
  </div>
<div class="">
  <label for="">Rating</label><br>
  <input type="text" name="rating" value="">
</div>

<div class="">
  <label for="">Estreno</label><br>
  <input type="date" name="release_date" value="">
</div>

<div class="">
<label for="">Duracion</label><br>
  <input type="text" name="length" value="">
</div>

  <button type="submit" name="Agregar">Agregar</button>
</form>



@endsection
