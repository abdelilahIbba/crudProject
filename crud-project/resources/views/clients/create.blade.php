<script src="https://cdn.tailwindcss.com"></script>

<form action="{{ route('clients.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-semibold">Name:</label>
        <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div class="mb-4">
        <label for="email" class="block text-gray-700 font-semibold">Email:</label>
        <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div class="mb-4">
        <label for="phone" class="block text-gray-700 font-semibold">Phone:</label>
        <input type="text" name="phone" id="phone" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div class="mb-4">
        <label for="national_id" class="block text-gray-700 font-semibold">National ID:</label>
        <input type="text" name="national_id" id="national_id" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div class="mb-4">
        <label for="driver_license_number" class="block text-gray-700 font-semibold">Driver's License Number:</label>
        <input type="text" name="driver_license_number" id="driver_license_number" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div class="mb-4">
        <label for="driver_license_expiry_date" class="block text-gray-700 font-semibold">Driver's License Expiry Date:</label>
        <input type="date" name="driver_license_expiry_date" id="driver_license_expiry_date" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md shadow-md">Save</button>
</form>
