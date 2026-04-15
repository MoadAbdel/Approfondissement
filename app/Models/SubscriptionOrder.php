<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class SubscriptionOrder extends Model
{
    protected $fillable = [
        'name',
        'price',
        'duration_months',
    ];

    public function order(): MorphOne
    {
        return $this->morphOne(Order::class, 'orderable');
    }
}
