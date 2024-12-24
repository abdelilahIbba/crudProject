<!-- resources/views/items/edit.blade.php -->

<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Edit Item: {{ $item->name }}</h2>

        <!-- Item Edit Form -->
        <form action="{{ route('items.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Item Name -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $item->name) }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
            </div>

            <!-- Item Description -->
            {{-- <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" id="description" rows="4" class="w-full px-4 py-2 mt-2 border rounded-md" required>{{ old('description', $item->description) }}</textarea>
            </div> --}}

            <!-- Item Price -->
            {{-- <div class="mb-4">
                <label for="price" class="block text-gray-700">Price</label>
                <input type="number" name="price" id="price" value="{{ old('price', $item->price) }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
            </div> --}}

            <!-- Category -->
            {{-- <div class="mb-4">
                <label for="category_id" class="block text-gray-700">Category</label>
                <select name="category_id" id="category_id" class="w-full px-4 py-2 mt-2 border rounded-md" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $item->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div> --}}

            <!-- Submit Button -->
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">Update Item</button>
            </div>
        </form>
    </div>
</div>

