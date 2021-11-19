<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RecipeUser;
class RecipeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $sorceFile = storage_path('json_files/recipes.json');
        // $string = file_get_contents($sorceFile);
        // $data = json_decode($string , true);
       

        // foreach($data as $recipe_data) {
        //     // looping inside the ingredients key of data array
        //      $record = new RecipeUser();
        //      $record->recipe_id = $recipe_data['id'];
        //      $record->user_id = $recipe_data['id'];
        //      //dd($record);
        //      $record->save();
            
        // }

        // THIS IS NOT CORRECT AND ALSO  WE DONT HAVE OUR USERS YET
    }
}
