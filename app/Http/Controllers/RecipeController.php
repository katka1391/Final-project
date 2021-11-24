<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\Instruction;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function reactApp()
    {
        return view('recipes.react-app');
    }

    public function create()
    {
        return view('add-recipe/index');
    }

    public function store(Request $request)
    {

        //return $request;

        $recipe = new Recipe();
        $recipe->name = $request->input('name');
        // $recipe->description = $request->input('description');
        $recipe->calories = $request->input('calories');
        $recipe->cooktime = $request->input('cooktime');
        $recipe->preptime = $request->input('preptime');
        $recipe->difficulty = $request->input('difficulty');
        $recipe->servings = $request->input('servings');
        $recipe->calories = $request->input('calories');
        $recipe->fat = $request->input('fat');
        $recipe->satfat = $request->input('satfat');
        $recipe->carbs = $request->input('carbs');
        $recipe->fiber = $request->input('fiber');
        $recipe->sugar = $request->input('sugar');
        $recipe->protein = $request->input('protein');

        $recipe->save();
        
        $ingredients = $request->input('ingredients');
        foreach($ingredients as $OneIngredient ) {
            if($OneIngredient) {

                $ingredient = Ingredient::where('name',$OneIngredient)->first();
                if($ingredient === null){
                    $ingredient = new Ingredient();
                    $ingredient->name = $OneIngredient;
                    $ingredient->save();
                }


                $recipe->ingredients()->attach($ingredient);
                
            }
        }
       
        $instructions= $request->input('instructions');

        foreach($instructions as $i => $oneInstruction){

            if($oneInstruction){

                $instruction = new Instruction();
                $instruction->recipe_id = $recipe->id;
                $instruction->text = $oneInstruction;
                $instruction->step = $i + 1;
                $instruction->save();

            }
        }

        $image = new Image();
        $image->recipe_id = $recipe->id;
        $image->path = $request->input('image');
        $image->save();
        
        

        return view('add-recipe/index');

    }
}

