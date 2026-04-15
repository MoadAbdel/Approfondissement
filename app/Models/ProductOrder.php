<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class ProductOrder extends Model
{
    protected $fillable = [
        'name',
        'price',
    ];

    public function order(): MorphOne
    {
        return $this->morphOne(Order::class, 'orderable');
    }
}
