<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use DB;
use App\Ingredient;

class FoodController extends Controller
{

  public function index() {
    return Food::all();
  }

  public function getIngredients(Request $request) {
    $currentId = $request->food_id;
    $currentFood = DB::table('food')->where('id', $currentId)->first();

    $currentName = $currentFood->name;
    $collection = DB::table('ingredient')->where('food_recipe', 'LIKE', '%' . $currentName . '%')->get();

    return response()->json($collection);
  }

}
