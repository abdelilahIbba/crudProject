<!-- resources/views/items/index.blade.php -->
<script src="https://cdn.tailwindcss.com"></script>
<a href="<?php echo e(route('items.create')); ?>" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md shadow-md mb-4 inline-block">Create Item</a>

<table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
    <thead class="bg-gray-100">
        <tr>
            <th class="px-6 py-4 text-left text-gray-700">Name</th>
            <th class="px-6 py-4 text-left text-gray-700">Description</th>
            <th class="px-6 py-4 text-left text-gray-700">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="border-b hover:bg-gray-50">
            <td class="px-6 py-4"><?php echo e($item->name); ?></td>
            <td class="px-6 py-4"><?php echo e($item->description); ?></td>
            <td class="px-6 py-4">
                <a href="<?php echo e(route('items.show', $item->id)); ?>" class="text-blue-500 hover:text-blue-700">View</a>
                <a href="<?php echo e(route('items.edit', $item->id)); ?>" class="text-yellow-500 hover:text-yellow-700 mx-4">Edit</a>
                <form action="<?php echo e(route('items.destroy', $item->id)); ?>" method="POST" class="inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH C:\Users\T490s Ha\Desktop\Projects\crud-project\resources\views/items/index.blade.php ENDPATH**/ ?>