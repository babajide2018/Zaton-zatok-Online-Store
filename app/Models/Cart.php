<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_name',
        'color',
        'size',
        'product_price',
        'quantity',
        'amount',
        'product_image'
    ];

    }
