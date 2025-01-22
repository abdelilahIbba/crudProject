<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Edit Client: {{ $client->name }}</h2>

        <!-- Client Edit Form -->
        <form action="{{ route('clients.update', $client->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Client Name -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $client->name) }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
            </div>

            <!-- Client Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $client->email) }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
            </div>

            <!-- Client Phone -->
            <div class="mb-4">
                <label for="phone" class="block text-gray-700">Phone</label>
                <input type="text" name="phone" id="phone" value="{{ old('phone', $client->phone) }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
            </div>

            <!-- Client National ID -->
            <div class="mb-4">
                <label for="national_id" class="block text-gray-700">National ID</label>
                <input type="text" name="national_id" id="national_id" value="{{ old('national_id', $client->national_id) }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
            </div>

            <!-- Driver's License Number -->
            <div class="mb-4">
                <label for="driver_license_number" class="block text-gray-700">Driver's License Number</label>
                <input type="text" name="driver_license_number" id="driver_license_number" value="{{ old('driver_license_number', $client->driver_license_number) }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
            </div>

            <!-- Driver's License Expiry Date -->
            <div class="mb-4">
                <label for="driver_license_expiry_date" class="block text-gray-700">Driver's License Expiry Date</label>
                <input type="date" name="driver_license_expiry_date" id="driver_license_expiry_date" value="{{ old('driver_license_expiry_date', $client->driver_license_expiry_date) }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
            </div>

            <!-- Submit Button -->
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">Update Client</button>
            </div>
        </form>
    </div>
</div>
