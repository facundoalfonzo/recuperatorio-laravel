<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function movie(){
      return $this->HasMany(Movie::class,'movies_id','genre_id');

    }

      public function genre(){
        return $this->BelongsTo(Genre::class,'movies_id');
    }

    public function mostrargene(){
      return $this->BelongsTo(Genre::class,'genre_id');
  }

    }

