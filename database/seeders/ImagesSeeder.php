<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
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
        
        foreach ($data as $recipe_data) {

            foreach($recipe_data['images'] as $images_data) {
             
                    $record = new Image();
                    $record->recipe_id = $recipe_data['id'];
                    $record->path = $images_data['path'];
               //dd($recipe_data['images']);   



                   $record->save();
            }
       
      

     
        }
    }
}
