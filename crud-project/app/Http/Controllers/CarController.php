<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();  // Get all cars
        return view('cars.index', compact('cars'));  // Return view with cars data
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');  // Return create view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required|string|max:255',  // Validate model field
            'make' => 'required|string|max:255',  // Validate make field
            'year' => 'required|digits:4',  // Validate year field
            'fuel_type' => 'required|string',  // Validate fuel type
            'daily_price' => 'required|numeric|min:0',  // Validate daily price
            'availability' => 'required|in:available,unavailable',  // Validate availability
            'image' => 'nullable|image',  // Validate image field (nullable)
        ]);

        // Handle image upload if present
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('cars', 'public');
        }

        // Create new car record
        Car::create($data);

        return redirect()->route('cars.index')->with('success', 'Car created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));  // Show details of the car
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));  // Return edit view with car data
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'model' => 'required|string|max:255',
            'make' => 'required|string|max:255',
            'year' => 'required|digits:4',
            'fuel_type' => 'required|string',
            'daily_price' => 'required|numeric|min:0',
            'availability' => 'required|in:available,unavailable',
            'image' => 'nullable|image',  // Image is optional during update
        ]);

        // Handle image upload if present
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('cars', 'public');
        }

        // Update car data
        $car->update($data);

        return redirect()->route('cars.index')->with('success', 'Car updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Car deleted successfully.');
    }
}
