

<?php $__env->startSection('content'); ?>
    <!-- # Contactpagina: Toont een contactformulier -->
    <div class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto">
        <h1 class="text-2xl font-bold mb-4">Contacteer Ons</h1>
        <form method="POST" action="<?php echo e(route('contact')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium">Naam</label>
                <input type="text" name="name" id="name" class="border p-2 w-full rounded" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">E-mail</label>
                <input type="email" name="email" id="email" class="border p-2 w-full rounded" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium">Bericht</label>
                <textarea name="message" id="message" class="border p-2 w-full rounded" required></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white p-2 rounded w-full">Verstuur</button>
        </form>
        <?php if(session('success')): ?>
            <p class="text-green-600 mt-4"><?php echo e(session('success')); ?></p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\karim\Desktop\verkoopwebsite\resources\views/contact.blade.php ENDPATH**/ ?>