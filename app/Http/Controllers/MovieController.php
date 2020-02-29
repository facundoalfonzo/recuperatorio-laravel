<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\genre;
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

      public function EditarMovies(Request $datos){
        $editarMovies = Movie::find($datos->id);

        $editarMovies->title = $datos['title'];
        $editarMovies->rating = $datos['rating'];
        $editarMovies->awards = $datos['awards'];
        $editarMovies->length = $datos['length'];
        $editarMovies->release_date = $datos['release_date'];
        $editarMovies->genre_id = $datos['genre_id'];

        $editatMovies->save();
        return redirect('/movies');
      }

}
