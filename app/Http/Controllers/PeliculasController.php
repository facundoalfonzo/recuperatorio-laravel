<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class PeliculasController extends Controller
{
    public function mostrarPeliculas(){
      $peliculas = Movie::all();

      return view('peliculas', compact('peliculas'));

    }


      public function detallePeliculas($id){
        $peliculaElegida = Movie::find($id);
        return view('detallePeliculas', compact('peliculaElegida'));
  }


      public function agregar(Request $datos){
            $validacion = [
              'title' => 'required|min:2',
              'awards' => 'required|numeric',
              'rating' => 'required|numeric',
            'release_date' => 'required|date',
              'length' => 'required|numeric'
];
    $mesajes = [
      'required' =>'El campo :atribute es obligatorio',
      'min' =>'El titulo debe tener como minimo 2 caracteres',
      'numeric' =>'El campo :atribute debe ser numeric',
      'date' =>'Debe ingresar una feche valida'
    ];

    $this->validate($datos, $validacion);

    $peliculaNueva = new Movie;
    $peliculaNueva->title = $datos['title'];
    $peliculaNueva->awards = $datos['awards'];
    $peliculaNueva->rating = $datos['rating'];
    $peliculaNueva->release_date = $datos['release_date'];
    $peliculaNueva->length = $datos['length'];

    $peliculaNueva->save();
      return redirect('/peliculas');
      }




}
