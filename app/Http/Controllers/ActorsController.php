<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
class ActorsController extends Controller
{
  public function ActorsName(){
    $nombreActors = Actor::all();

    return view('actors',compact('nombreActors'));
}
}
