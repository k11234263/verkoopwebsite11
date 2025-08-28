<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(config('app.name', 'Verkoopwebsite')); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-100 font-sans">
    <!-- # Navigatie: Includeert navigation.blade.php -->
    <?php echo $__env->make('layouts.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- # Content: Plaatst de inhoud van andere pagina’s -->
    <main class="min-h-screen">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- # Footer: Eenvoudige footer voor professionaliteit -->
    <footer class="bg-gray-900 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; <?php echo e(date('Y')); ?> Verkoopwebsite. Alle rechten voorbehouden.</p>
            <div class="mt-4 space-x-4">
                <a href="<?php echo e(route('about')); ?>" class="hover:underline">Over Ons</a>
                <a href="<?php echo e(route('contact')); ?>" class="hover:underline">Contact</a>
            </div>
        </div>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\karim\Desktop\verkoopwebsite\resources\views/layouts/app.blade.php ENDPATH**/ ?>