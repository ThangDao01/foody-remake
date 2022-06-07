<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantDiscount extends Model
{
    use HasFactory;
    public function restaurant(){
        return $this->hasMany(Restaurant::class);
    }
}
