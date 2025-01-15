<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $car = Car::findOrFail($request->car_id);

        $totalPrice = $car->price_per_day * (strtotime($request->end_date) - strtotime($request->start_date)) / 86400;

        Booking::create([
            'car_id' => $car->id,
            'customer_name' => $request->customer_name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_price' => $totalPrice,
        ]);

        return redirect('/')->with('success', 'تم الحجز بنجاح!');
    }
}
