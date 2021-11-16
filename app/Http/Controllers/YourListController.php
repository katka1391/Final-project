<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourListController extends Controller
{
    public function index()
    {
        return view('your-list/index');
    }
}
