<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Ingredient;

class FoodController extends Controller
{

  public function index() {
    return Food::all();
  }

  public function getIngredients(Request $request) {
    $currentId = $request->food_id;
    $currentFood = Food::where('id', $currentId)->first();

    $currentName = $currentFood->name;
    $collection = Ingredient::where('food_recipe', 'LIKE', '%' . $currentName . '%')->get();

    return response()->json($collection);
  }

}
