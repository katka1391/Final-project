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

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }

    public function instructions()
    {
        return $this->hasMany('App\Models\Instruction');
    }

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    
}