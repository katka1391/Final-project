<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\YourListController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/article1', [ArticlesController::class, 'article1']);
Route::get('/article2', [ArticlesController::class, 'article2']);
Route::get('/article3', [ArticlesController::class, 'article3']);
Route::get('/article4', [ArticlesController::class, 'article4']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/list', [YourListController::class, 'index']);

Route::get('/subscribe', [SubscribeController::class, 'subscribe']);


Route::get('/', [HomeController::class, 'index']);

Route::post('/getData', [SubscribeController::class, 'getData']);

// any URL that begins with /recipes should desplay the recipes.react-app view
Route::view('/recipes/{param?}', 'recipes.react-app')->where('param' , '.*')->name('recipes');
