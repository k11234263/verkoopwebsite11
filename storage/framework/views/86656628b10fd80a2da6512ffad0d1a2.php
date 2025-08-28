<!-- resources/views/layouts/navigation.blade.php -->
<nav class="bg-blue-600 p-4 text-white">
    <div class="container mx-auto flex justify-between">
        <!-- # Merknaam: Link naar homepagina -->
        <a href="<?php echo e(route('home')); ?>" class="text-lg font-bold">Verkoopwebsite</a>
        <div class="space-x-4">
            <!-- # Navigatie: Links naar publieke pagina’s -->
            <a href="<?php echo e(route('home')); ?>">Home</a>
            <a href="<?php echo e(route('about')); ?>">Over Ons</a>
            <a href="<?php echo e(route('products')); ?>">Producten</a>
            <a href="<?php echo e(route('contact')); ?>">Contact</a>
            <?php if(auth()->guard()->check()): ?>
                <!-- # Ingelogde gebruiker: Link naar profiel en admin (indien beheerder) -->
                <a href="<?php echo e(route('profile.edit')); ?>">Profiel</a>
                <?php if(auth()->user()->role === 'beheerder'): ?>
                    <a href="<?php echo e(route('admin.products.index')); ?>">Admin</a>
                <?php endif; ?>
                <form action="<?php echo e(route('logout')); ?>" method="POST" class="inline">
                    <?php echo csrf_field(); ?>
                    <button type="submit">Uitloggen</button>
                </form>
            <?php else: ?>
                <!-- # Niet ingelogd: Links naar login/registratie -->
                <a href="<?php echo e(route('login')); ?>">Inloggen</a>
                <a href="<?php echo e(route('register')); ?>">Registreren</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\karim\Desktop\verkoopwebsite\resources\views/layouts/navigation.blade.php ENDPATH**/ ?>