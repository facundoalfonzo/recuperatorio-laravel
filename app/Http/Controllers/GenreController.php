<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;
class GenreController extends Controller
{
    public function mostrargenres(){
      $genres=Genre::all();
      return view('genres',compact('genres'));
    }

    

   
}
