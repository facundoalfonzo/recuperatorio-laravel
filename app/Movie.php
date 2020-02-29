<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  public $guarded=[];


  public function actor(){
    return $this->BelongsToMany(Actor::class.'id');
  }

  public function genre(){
    return $this->BelongsTo(genre::class,'genre_id');
  }


  public function actorMovies(){
    return $this->HasMay(actor::class,'id');
  }

     

}
