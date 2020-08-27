<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model {

  protected $table = 'favorite';

  protected $fillable = ['user_id',
    'food_id',
  ];

    public function users()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function foods()
    {
      return $this->belongsTo('App\Food', 'food_id');
    }


    public $timestamps = false;
}
