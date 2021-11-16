<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InstructionsSeeder extends Seeder
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
            // looping inside the ingredients key of data array
            foreach($recipe_data->instructions as $instructions_data) {
                // pushing each name of ingredient to the ingredient_array
                // gives us repeats of names!
                $instructions_array[] = $instructions_data->step;
                dd($instructions_array);
            }
          
        }


    }
}
