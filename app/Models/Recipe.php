<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function ingredients()
    {
        return $this->hasMany('App\Models\Ingredient');
    }

    // public function images()
    // {
    //     return $this->hasMany('App\Models\Image');
    // }
}
