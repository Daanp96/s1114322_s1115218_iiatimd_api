<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;
use DB;

class IngredientController extends Controller
{
    public function index(){
        return Ingredient::all();
    }

    public function getFood(Request $request) {
      $currentId = $request->ingredient_id;
      $currentIngredient = DB::table('ingredient')->where('id', $currentId)->first();

      $currentName = $currentIngredient->name;
      $collection = DB::table('food')->where('ingredients', 'LIKE', '%' . $currentName . '%')->get();

      return response()->json($collection);
    }
}
