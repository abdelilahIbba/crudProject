<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'brand', 'year', 'fuel_type', 'price_per_day', 'description'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
