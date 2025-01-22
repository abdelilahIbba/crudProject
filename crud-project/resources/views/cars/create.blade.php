<script src="https://cdn.tailwindcss.com"></script>

<form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
    @csrf

    <!-- Model -->
    <div class="mb-4">
        <label for="model" class="block text-gray-700 font-semibold">Model:</label>
        <input type="text" name="model" id="model" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <!-- Make -->
    <div class="mb-4">
        <label for="make" class="block text-gray-700 font-semibold">Make:</label>
        <input type="text" name="make" id="make" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <!-- Year -->
    <div class="mb-4">
        <label for="year" class="block text-gray-700 font-semibold">Year:</label>
        <input type="number" name="year" id="year" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required min="1900" max="{{ date('Y') }}">
    </div>

    <!-- Fuel Type -->
    <div class="mb-4">
        <label for="fuel_type" class="block text-gray-700 font-semibold">Fuel Type:</label>
        <select name="fuel_type" id="fuel_type" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            <option value="petrol">Petrol</option>
            <option value="diesel">Diesel</option>
            <option value="electric">Electric</option>
            <option value="hybrid">Hybrid</option>
        </select>
    </div>

    <!-- Daily Price -->
    <div class="mb-4">
        <label for="daily_price" class="block text-gray-700 font-semibold">Daily Price (Dhs):</label>
        <input type="number" name="daily_price" id="daily_price" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required step="0.01">
    </div>

    <!-- Availability -->
    <div class="mb-4">
        <label for="availability" class="block text-gray-700 font-semibold">Availability:</label>
        <select name="availability" id="availability" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            <option value="available">Available</option>
            <option value="unavailable">Unavailable</option>
        </select>
    </div>

    <!-- Image -->
    <div class="mb-4">
        <label for="image" class="block text-gray-700 font-semibold">Car Image:</label>
        <input type="file" name="image" id="image" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" accept="image/*">
    </div>

    <!-- Submit Button -->
    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md shadow-md">Save</button>
</form>
