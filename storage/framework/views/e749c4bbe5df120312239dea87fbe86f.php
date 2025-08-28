

<?php $__env->startSection('content'); ?>
    <!-- # Hero-sectie: Grote afbeelding met CTA -->
    <section class="relative bg-gray-900 text-white">
        <img src="https://images.unsplash.com/photo-1557821552-17105176677c?q=80&w=1932&auto=format&fit=crop" 
             alt="Webshop Hero" 
             class="w-full h-[500px] object-cover opacity-70">
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Welkom bij Verkoopwebsite!</h1>
                <p class="text-lg md:text-xl mb-6">Ontdek onze geweldige producten en geniet van een naadloze winkelervaring.</p>
                <a href="<?php echo e(route('products')); ?>" 
                   class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                    Shop Nu!
                </a>
            </div>
        </div>
    </section>

    <!-- # Product-highlights: Toon populaire producten -->
    <section class="container mx-auto py-12">
        <h2 class="text-3xl font-bold text-center mb-8">Onze Topproducten</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Product 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1499&auto=format&fit=crop" 
                     alt="Product 1" 
                     class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Top Product 1</h3>
                    <p class="text-gray-600 mb-4">Beschrijving van een geweldig product dat je niet mag missen!</p>
                    <a href="<?php echo e(route('products')); ?>" 
                       class="text-blue-600 hover:underline">Bekijk Product</a>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=1470&auto=format&fit=crop" 
                     alt="Product 2" 
                     class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Top Product 2</h3>
                    <p class="text-gray-600 mb-4">Een must-have voor elke shopper!</p>
                    <a href="<?php echo e(route('products')); ?>" 
                       class="text-blue-600 hover:underline">Bekijk Product</a>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <gif src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExZmZ3a3I3bW5vM2Z1cTd2a2Y2b3F3a3R5a2M4c2R2c3F1c3F0d2Y2eCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/3o7TKsQ8zgPBMfJ4xW/giphy.gif" 
                     alt="Product 3 GIF" 
                     class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Top Product 3</h3>
                    <p class="text-gray-600 mb-4">Breng wat beweging in je winkelervaring!</p>
                    <a href="<?php echo e(route('products')); ?>" 
                       class="text-blue-600 hover:underline">Bekijk Product</a>
                </div>
            </div>
        </div>
    </section>

    <!-- # Over-ons-teaser: Introduceer je merk -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Over Verkoopwebsite</h2>
            <p class="text-lg text-gray-600 mb-6">Wij zijn gepassioneerd over het leveren van de beste producten met een ongeëvenaarde service. Ontdek ons verhaal!</p>
            <a href="<?php echo e(route('about')); ?>" 
               class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                Lees Meer
            </a>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\karim\Desktop\verkoopwebsite\resources\views/home.blade.php ENDPATH**/ ?>