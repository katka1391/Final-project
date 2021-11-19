<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RecipeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/recipes', [RecipeController::class, 'allRecipes']);
Route::get('/categories', [RecipeController::class, 'allCategories']);
Route::get('/ingredients', [RecipeController::class, 'allIngredients']);

Route::get('/recipes/{id}', [RecipeController::class, 'recipeId']);
