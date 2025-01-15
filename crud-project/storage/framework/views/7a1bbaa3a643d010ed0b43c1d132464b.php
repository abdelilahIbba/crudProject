<!-- resources/views/items/edit.blade.php -->

<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Edit Item: <?php echo e($item->name); ?></h2>

        <!-- Item Edit Form -->
        <form action="<?php echo e(route('items.update', $item->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <!-- Item Name -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="<?php echo e(old('name', $item->name)); ?>" class="w-full px-4 py-2 mt-2 border rounded-md" required>
            </div>

            <!-- Item Description -->
            

            <!-- Item Price -->
            

            <!-- Category -->
            

            <!-- Submit Button -->
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">Update Item</button>
            </div>
        </form>
    </div>
</div>

<?php /**PATH C:\Users\T490s Ha\Desktop\Projects\crud-project\resources\views/items/edit.blade.php ENDPATH**/ ?>