<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function article1()
    {
        return view('articles/article1');
    }
  
    public function article2()
    {
        return view('articles/article2');
    }
  
    public function article3()
    {
        return view('articles/article3');
    }
}
