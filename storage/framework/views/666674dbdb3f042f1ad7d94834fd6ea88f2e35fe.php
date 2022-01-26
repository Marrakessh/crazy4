<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'EventApp')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <?php echo \Livewire\Livewire::styles(); ?>

        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
        <link rel="stylesheet" href="<?php echo e(asset('css/event.css')); ?>">



    </head>
    <body>
        <div class="container">


            <!-- Page Content -->
            <main>
                <?php echo $__env->yieldContent('content'); ?>

                <?php if( isset($slot) ): ?>
                    <?php echo e($slot); ?>

                <?php endif; ?>

            </main>
        </div>
        <!-- Scripts -->
        <?php echo \Livewire\Livewire::scripts(); ?>

        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    </body>

</html>
<?php /**PATH D:\xampp\htdocs\crazy\resources\views/layouts/guest.blade.php ENDPATH**/ ?>