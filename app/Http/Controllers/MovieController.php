<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Actor;
class MovieController extends Controller
{
    public function mostrarmovies(){
      $mostrarmovies =Movie::all();
      return view('movies',compact('mostrarmovies'));

    }
    

      public function detallepelicula($id){
        $peliculadetalle=Movie::find($id);
        return view('detallepelicula',compact('peliculadetalle'));
      }

      public function seleccionarEditar($id){
        $seleccionarEditar = Movie::find($id);
        return view('/editarPeliculas',compact('seleccionarEditar'));
      }




      public function editar(Request $datos){
        $validacion =[
          'title'=>'required|min:4',
          'rating'=>'required|numeric',
          'awards'=>'required|numeric',
          'length'=>'required|numeric',
          'release_date'=>'required|date',
          'genre_id'=>'required|numeric',
        ];
      
      $mesajes =[
        'required' =>'El campo :atribute es obligatorio',
            'min' =>'El titulo debe tener como minimo 4 caracteres',
            'numeric' =>'El campo :atribute debe ser numeric',
            'date' =>'El campo :atribute debe ser feha',
            'numeric' =>'El campo :atribute debe ser numeric'

          ];


          $this->validate($datos, $validacion);
        $editarMovies = Movie::find($datos->id);
        
        $editarMovies->title = $datos['title'];
        $editarMovies->rating = $datos['rating'];
        $editarMovies->awards = $datos['awards'];
        $editarMovies->length = $datos['length'];
        $editarMovies->release_date = $datos['release_date'];
        $editarMovies->genre_id = $datos['genre_id'];

        $editarMovies-> save();
        return redirect('/movies');
      }

}
