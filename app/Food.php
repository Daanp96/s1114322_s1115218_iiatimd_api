<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
  protected $table = 'food';

  protected $fillable = "food_id";

  public function favorites() {
    return $this->hasMany('App\Favorite');
  }
}
