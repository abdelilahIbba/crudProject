<!-- resources/views/clients/index.blade.php -->
<script src="https://cdn.tailwindcss.com"></script>

<a href="{{ route('clients.create') }}"
    class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md shadow-md mb-4 inline-block">Create Client</a>

<table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
    <thead class="bg-gray-100">
        <tr>
            <th class="px-6 py-4 text-left text-gray-700">Name</th>
            <th class="px-6 py-4 text-left text-gray-700">Email</th>
            <th class="px-6 py-4 text-left text-gray-700">Phone</th>
            <th class="px-6 py-4 text-left text-gray-700">National ID</th>
            <th class="px-6 py-4 text-left text-gray-700">Driver License</th>
            <th class="px-6 py-4 text-left text-gray-700">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
            <tr class="border-b hover:bg-gray-50">
                <td class="px-6 py-4">{{ $client->name }}</td>
                <td class="px-6 py-4">{{ $client->email }}</td>
                <td class="px-6 py-4">{{ $client->phone }}</td>
                <td class="px-6 py-4">{{ $client->national_id }}</td>
                <td class="px-6 py-4">
                    {{ $client->driver_license_number }} <br>
                    <small class="text-gray-500">Expiry: {{ $client->driver_license_expiry_date }}</small>
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('clients.show', $client->id) }}"
                        class="text-blue-500 hover:text-blue-700">View</a>
                    <a href="{{ route('clients.edit', $client->id) }}"
                        class="text-yellow-500 hover:text-yellow-700 mx-4">Edit</a>
                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
