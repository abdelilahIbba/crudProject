<!-- resources/views/items/create.blade.php -->
<script src="https://cdn.tailwindcss.com"></script>
<form action="{{ route('items.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-semibold">Name:</label>
        <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>
    
 
    
    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md shadow-md">Save</button>
</form>
