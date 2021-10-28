<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatkaController extends Controller
{
    public function index() {
        return view('katka');
    }
}
