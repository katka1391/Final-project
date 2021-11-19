<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Recipe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $images = Image::get();
        $recipes = Recipe::get();
        return view('home/index', compact('images', 'recipes'));
    }
}
