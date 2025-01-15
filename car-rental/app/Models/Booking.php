<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'customer_name', 'customer_phone', 'customer_email', 'start_date', 'end_date', 'total_price'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
