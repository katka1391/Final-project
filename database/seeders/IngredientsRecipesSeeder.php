<?php

namespace Database\Seeders;
use App\Models\Ingredient;
use Illuminate\Database\Seeder;
use App\Models\IngredientRecipe;
class IngredientsRecipesSeeder extends Seeder
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
       
 
        $instructions_array = [];
        
        // looping through the $data array 
        foreach($data as $recipe_data) {
            $step = 1;
            // looping inside the ingredients key of data array
            foreach($recipe_data['ingredients'] as $ingredient_data) {
                // pushing each name of ingredient to the ingredient_array
                // gives us repeats of names!
                    $record = new IngredientRecipe();
                    $record->recipe_id = $recipe_data['id'];
                    
                    $ingredient = Ingredient::where('name', $ingredient_data['name'])->first();
                    $record->ingredient_id =  $ingredient->id;

                    $record->amount = $ingredient_data['amount'];
                    $record->unit = $ingredient_data['unit'];
                   // dump($record);
                   $record->save();
              //  dump($instructions_data["stepNumber"]);
             /*   $instructions_array[] = $instructions_data["stepNumber"];
                $instruction = new Instruction();
                $instruction->recipe_id = $recipe_data['id'];
                $instruction->step = $step++;
                $instruction->text = $instructions_data["stepNumber"];
                
                $instruction->save();*/
            }
        }
    }
}
