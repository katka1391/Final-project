<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function allRecipes()
    {
        $recipesData = Recipe::with("images")->with("categories")->with("ingredients")->get();
        return $recipesData;
    }

    public function allCategories()
    {
        $categoriesData = Category::all();

        $result = ["cuisine" => [], "dietary requirement" => [], "meal" => []];

        foreach ($categoriesData as $category) {
            if ($category->type === "cuisine") {
                $result['cuisine'][] = $category->name;
            } else if ($category->type === "dietary requirement") {
                $result['dietary requirement'][] = $category->name;
            } else if ($category->type === "meal") {
                $result['meal'][] = $category->name;
            }
        }


        return $result;
    }

    public function allIngredients()
    {
        $ingredientsData = Ingredient::all();

        return $ingredientsData;
    }

    public function recipeId($id)
    {

        $recipe = Recipe::where('id', $id)->with("images")
            ->with("instructions")
            ->with("ingredients")
            ->get();

        return $recipe[0];
    }
    
}
