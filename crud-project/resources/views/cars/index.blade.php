<script src="https://cdn.tailwindcss.com"></script>

<a href="{{ route('cars.create') }}" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md shadow-md mb-4 inline-block">Create Car</a>

<table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
    <thead class="bg-gray-100">
        <tr>
            <th class="px-6 py-4 text-left text-gray-700">Model</th>
            <th class="px-6 py-4 text-left text-gray-700">Make</th>
            <th class="px-6 py-4 text-left text-gray-700">Year</th>
            <th class="px-6 py-4 text-left text-gray-700">Fuel Type</th>
            <th class="px-6 py-4 text-left text-gray-700">Daily Price</th>
            <th class="px-6 py-4 text-left text-gray-700">Availability</th> <!-- Changed column header -->
            <th class="px-6 py-4 text-left text-gray-700">Image</th>
            <th class="px-6 py-4 text-left text-gray-700">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
        <tr class="border-b hover:bg-gray-50">
            <td class="px-6 py-4">{{ $car->model }}</td>
            <td class="px-6 py-4">{{ $car->make }}</td>
            <td class="px-6 py-4">{{ $car->year }}</td>
            <td class="px-6 py-4">{{ $car->fuel_type }}</td>
            <td class="px-6 py-4">Dhs{{ number_format($car->daily_price, 2) }}</td>
            <td class="px-6 py-4">
                @if ($car->availability == 'available')
                    <span class="text-green-500">Available</span>
                @else
                    <span class="text-red-500">Unavailable</span>
                @endif
            </td>
            <td class="px-6 py-4">
                @if ($car->image)
                    <img src="{{ Storage::url($car->image) }}" alt="Car Image" class="w-16 h-16 object-cover rounded-md">
                @else
                    No Image
                @endif
            </td>
            <td class="px-6 py-4">
                <a href="{{ route('cars.show', $car->id) }}" class="text-blue-500 hover:text-blue-700">View</a>
                <a href="{{ route('cars.edit', $car->id) }}" class="text-yellow-500 hover:text-yellow-700 mx-4">Edit</a>
                <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
