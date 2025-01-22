<!-- resources/views/cars/edit.blade.php -->

<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Edit Car: {{ $car->model }} ({{ $car->make }})</h2>

        <!-- Car Edit Form -->
        <form action="{{ route('cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Car Model -->
            <div class="mb-4">
                <label for="model" class="block text-gray-700">Model</label>
                <input type="text" name="model" id="model" value="{{ old('model', $car->model) }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
            </div>

            <!-- Car Make -->
            <div class="mb-4">
                <label for="make" class="block text-gray-700">Make</label>
                <input type="text" name="make" id="make" value="{{ old('make', $car->make) }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
            </div>

            <!-- Car Year -->
            <div class="mb-4">
                <label for="year" class="block text-gray-700">Year</label>
                <input type="number" name="year" id="year" value="{{ old('year', $car->year) }}" class="w-full px-4 py-2 mt-2 border rounded-md" required min="1900" max="{{ date('Y') }}">
            </div>

            <!-- Car Fuel Type -->
            <div class="mb-4">
                <label for="fuel_type" class="block text-gray-700">Fuel Type</label>
                <select name="fuel_type" id="fuel_type" class="w-full px-4 py-2 mt-2 border rounded-md" required>
                    <option value="petrol" {{ $car->fuel_type == 'petrol' ? 'selected' : '' }}>Petrol</option>
                    <option value="diesel" {{ $car->fuel_type == 'diesel' ? 'selected' : '' }}>Diesel</option>
                    <option value="electric" {{ $car->fuel_type == 'electric' ? 'selected' : '' }}>Electric</option>
                    <option value="hybrid" {{ $car->fuel_type == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
                </select>
            </div>

            <!-- Car Daily Price -->
            <div class="mb-4">
                <label for="daily_price" class="block text-gray-700">Daily Price (Dhs)</label>
                <input type="number" name="daily_price" id="daily_price" value="{{ old('daily_price', $car->daily_price) }}" class="w-full px-4 py-2 mt-2 border rounded-md" required step="0.01">
            </div>

            <!-- Car Availability -->
            <div class="mb-4">
                <label for="availability" class="block text-gray-700">Availability</label>
                <select name="availability" id="availability" class="w-full px-4 py-2 mt-2 border rounded-md" required>
                    <option value="available" {{ $car->availability == 'available' ? 'selected' : '' }}>Available</option>
                    <option value="unavailable" {{ $car->availability == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
                </select>
            </div>

            <!-- Car Image -->
            <div class="mb-4">
                <label for="image" class="block text-gray-700">Car Image</label>
                <input type="file" name="image" id="image" class="w-full px-4 py-2 mt-2 border rounded-md" accept="image/*">
                @if($car->image)
                    <p class="text-gray-500 mt-2">Current Image: <img src="{{ Storage::url($car->image) }}" class="w-16 h-16 object-cover rounded-md mt-2"></p>
                @endif
            </div>

            <!-- Submit Button -->
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">Update Car</button>
            </div>
        </form>
    </div>
</div>
