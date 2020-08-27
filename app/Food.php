<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
  protected $table = 'food';

  public function favorites() {
    return $this->hasMany('App\Favorite');
  }
}
