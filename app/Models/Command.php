<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Command extends Model
{
    protected $fillable=[
        'name',
        'phone',
        'address',
        'product_id',

    ];
    use HasFactory;
    public function product():BelongsTo
    {
        return $this->belongsTo(\App\Models\Product::class);
    }
}


