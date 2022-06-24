<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function restaurant()
    {
        return $this->belongsToMany(Restaurant::class,'restaurant_categories');
    }
}
