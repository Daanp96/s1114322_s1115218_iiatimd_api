<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\User;
use App\Favorite;
use Auth;


class FavoriteController extends Controller
{
  public function index()
  {
    $favorites = Auth::user()->favorites()->get();
    return response()->json($favorites);
  }

  public function add(Request $request) {
    $currentUser = Auth::user()->id;
    $currentFood = $request->food_id;

    $favorite = Favorite::create([
      'food_id' => $currentFood,
      'user_id' => $currentUser,

    ]);

    return $favorite;

  }

  public function remove(Request $request) {
    $currentUser = Auth::user()->id;
    $currentFood = $request->food_id;

    $query = ['food_id' => $currentFood, 'user_id' => $currentUser];

    return Favorite::where($query)->delete();




  }
}
