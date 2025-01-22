<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // Add this fillable property to allow mass assignment
    protected $fillable = [
        'model',
        'make',
        'year',
        'fuel_type',
        'daily_price',
        'availability',
        'image'
    ];
}
