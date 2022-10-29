<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    use HasFactory;

    protected $table = 'food_items';

    protected $fillable = [
        'food_category', 'food_name', 'food_desc', 'food_price', 'food_image'
    ];
}
