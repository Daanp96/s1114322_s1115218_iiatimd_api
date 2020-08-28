<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;
use App\Food;

class IngredientController extends Controller
{
    public function index(){
        return Ingredient::all();
    }

    public function getFood(Request $request) {
      $currentId = $request->ingredient_id;
      $currentIngredient = Ingredient::where('id', $currentId)->first();

      $currentName = $currentIngredient->name;
      $collection = Food::where('ingredients', 'LIKE', '%' . $currentName . '%')->get();

      return response()->json($collection);
    }
}
