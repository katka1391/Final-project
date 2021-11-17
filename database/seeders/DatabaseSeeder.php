<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(IngredientsSeeder::class);   
        $this->call(InstructionsSeeder::class);
        $this->call(RecipesSeeder::class);
        $this->call(IngredientsRecipesSeeder::class);
        $this->call(ImagesSeeder::class);
        $this->call(RecipeUserSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
