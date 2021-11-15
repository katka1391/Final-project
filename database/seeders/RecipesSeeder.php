<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;
use App\Models\Recipe;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // delete all records from recipes (so that they are not duplicated)
        // DB::table('recipes')->truncate();

        $sorceFile = storage_path('json_files/recipes.json');
        $string = file_get_contents($sorceFile);
        $data = json_decode($string , true);
        
        foreach ($data as $recipe_data) {
            $recipe = new Recipe;
            $recipe->name = $recipe_data['name'];
            $recipe->description = $recipe_data['description'];
            $recipe->preptime = $recipe_data['preptime'];
            $recipe->difficulty = $recipe_data['difficulty'];
            $recipe->cooktime = $recipe_data['cooktime'];
            $recipe->servings = $recipe_data['servings'];
            $recipe->calories = $recipe_data['calories'];
            $recipe->fat = $recipe_data['fat'];
            $recipe->satfat = $recipe_data['satfat'];
            $recipe->carbs = $recipe_data['carbs'];
            $recipe->fiber = $recipe_data['fiber'];
            $recipe->sugar = $recipe_data['sugar'];
            $recipe->protein = $recipe_data['protein'];
           
            // dd($recipe_data);

            $recipe->save();
        }
    }
}
