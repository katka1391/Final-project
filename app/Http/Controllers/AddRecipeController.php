<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddRecipeController extends Controller
{
    public function index()
    {
        return view('add-recipe/index');
    }
}
