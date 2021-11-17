<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        function unique_multidim_array($array, $key) {
            $temp_array = array();
            $i = 0;
            $key_array = array();
           
            foreach($array as $val) {
                if (!in_array($val[$key], $key_array)) {
                    $key_array[$i] = $val[$key];
                    $temp_array[$i] = $val;
                }
                $i++;
            }
            return $temp_array;
        }

        $sorceFile = storage_path('json_files/recipes.json');
        $string = file_get_contents($sorceFile);
        $data = json_decode($string , true);
        
        $categoryArray = [];

        foreach ($data as $recipe_data) {
            foreach($recipe_data["categories"] as $categories_data) {
                $categoryArray[] = $categories_data;
            }
        }
        
        $ourUniqArray = unique_multidim_array($categoryArray, 'name');
        
        // dd($ourUniqArray);
        foreach ($ourUniqArray as $categories_data) {
            $category= new Category();
            $category->name = $categories_data['name'];
            $category->type = $categories_data['type'];
            $category->save();
        }
    }
}
