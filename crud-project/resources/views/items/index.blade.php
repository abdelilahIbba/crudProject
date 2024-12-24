<!-- resources/views/items/index.blade.php -->
<script src="https://cdn.tailwindcss.com"></script>
<a href="{{ route('items.create') }}" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md shadow-md mb-4 inline-block">Create Item</a>

<table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
    <thead class="bg-gray-100">
        <tr>
            <th class="px-6 py-4 text-left text-gray-700">Name</th>
            <th class="px-6 py-4 text-left text-gray-700">Description</th>
            <th class="px-6 py-4 text-left text-gray-700">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        <tr class="border-b hover:bg-gray-50">
            <td class="px-6 py-4">{{ $item->name }}</td>
            <td class="px-6 py-4">{{ $item->description }}</td>
            <td class="px-6 py-4">
                <a href="{{ route('items.show', $item->id) }}" class="text-blue-500 hover:text-blue-700">View</a>
                <a href="{{ route('items.edit', $item->id) }}" class="text-yellow-500 hover:text-yellow-700 mx-4">Edit</a>
                <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
