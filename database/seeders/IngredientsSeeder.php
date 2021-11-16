<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ingredient;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sorceFile = storage_path('json_files/recipes.json');
        $string = file_get_contents($sorceFile);
        $data = json_decode($string , true);

        // creating empty array to use inside the loop
        // cant create this in the loop!
        $ingredient_array = [];
        
        // looping through the $data array 
        foreach($data as $recipe_data) {
            // looping inside the ingredients key of data array
            foreach($recipe_data["ingredients"] as $ingredient_data) {
                // pushing each name of ingredient to the ingredient_array
                // gives us repeats of names!
                $ingredient_array[] = $ingredient_data["name"];
            
         }
           
        }
       // dd($ingredient_array);
        // array_unique gets rid of any repeated values
        $ourUniqArray = array_unique($ingredient_array);
        

        foreach ($ourUniqArray as $ingredient_data) {
            $ingredient = new Ingredient;
            $ingredient->name = $ingredient_data;
            
            $ingredient->save();
        }
    }
}
