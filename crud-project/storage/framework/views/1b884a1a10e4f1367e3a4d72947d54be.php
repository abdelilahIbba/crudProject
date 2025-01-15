<!-- resources/views/items/show.blade.php -->
<script src="https://cdn.tailwindcss.com"></script>
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <!-- Item Title -->
        <h2 class="text-3xl font-semibold text-gray-800 mb-4"><?php echo e($item->name); ?></h2>

        <!-- Item Description -->
        <p class="text-lg text-gray-600 mb-6"><?php echo e($item->description); ?></p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Item Image -->
            <div class="flex justify-center items-center">
                <img src="<?php echo e(asset('storage/'.$item->image)); ?>" alt="<?php echo e($item->name); ?>" class="w-full h-auto rounded-lg shadow-md">
            </div>

            <!-- Item Details -->
            <div class="flex flex-col justify-between">
                <div>
                    <p class="text-xl text-gray-700 font-semibold">Price:</p>
                    <p class="text-2xl text-green-500">$<?php echo e(number_format($item->price, 2)); ?></p>
                </div>

                

                <div class="mt-4">
                    <a href="<?php echo e(route('items.index')); ?>" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg shadow-md inline-block">Back to Items</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\Users\T490s Ha\Desktop\Projects\crud-project\resources\views/items/show.blade.php ENDPATH**/ ?>