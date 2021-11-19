<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryRecipe;
use Illuminate\Database\Seeder;

class CategoryRecipeSeeder extends Seeder
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
       

        foreach($data as $recipe_data) {

            foreach($recipe_data['categories'] as $category_data) {

                $record = new CategoryRecipe();
                $record->recipe_id = $recipe_data['id'];
                $category = Category::where('name', $category_data['name'])->first();
                $record->category_id = $category->id;
                //dd($record);
                $record->save();
            }
            
            
        
        }
    }
}
