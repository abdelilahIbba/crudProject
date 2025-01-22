<script src="https://cdn.tailwindcss.com"></script>
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <!-- Client Title -->
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Client: {{ $client->name }}</h2>

        <!-- Client Details -->
        <div class="text-lg text-gray-600 mb-6">
            <p><span class="font-semibold text-gray-700">Email:</span> {{ $client->email }}</p>
            <p><span class="font-semibold text-gray-700">Phone:</span> {{ $client->phone }}</p>
            <p><span class="font-semibold text-gray-700">National ID:</span> {{ $client->national_id }}</p>
            <p><span class="font-semibold text-gray-700">Driver's License Number:</span> {{ $client->driver_license_number }}</p>
            <p><span class="font-semibold text-gray-700">Driver's License Expiry Date:</span> {{ $client->driver_license_expiry_date }}</p>
        </div>

        <!-- Back Button -->
        <div class="mt-4">
            <a href="{{ route('clients.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg shadow-md inline-block">Back to Clients</a>
        </div>
    </div>
</div>
