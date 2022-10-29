<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    public function hasManyFoodItems(array $fooditem)
    {
        return null !== $this->fooditems()->whereIn('food_id', $fooditem)->first();
    }
}
