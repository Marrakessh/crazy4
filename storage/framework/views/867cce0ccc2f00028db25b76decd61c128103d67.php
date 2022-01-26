<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

                <?php if(Route::has('login')): ?>
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(url('admin')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Admin</a>
                        <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            <?php if(Route::has('register')): ?>
                                <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>


                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="-50 0 2000 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">

                            <circle cx="60" cy="60" r="50" stroke="green" stroke-width="10" fill="yellow" />
                            <text x="150" y="100" fill="red" textLength="1700" font-size="8em" stroke-width="6">Event Management Made Easy</text>

                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2">

                                <div class=" float-left ml-4 text-lg leading-7 font-semibold">
                                    <h3>Events</h3>
                                </div>
                                <div class="float-right ml-4 text-lg leading-7 font-semibold">
                                    <a  href="<?php echo e(url('search-events')); ?>">Search for Event</a>
                                </div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <p><strong>Events happening in your local area - book tickets online.</strong></p>

                                    <div>
                                        <?php if (isset($component)) { $__componentOriginal3044adc4e2a669ac1ace8e86a75e243af8d83bdd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\EventList::class, []); ?>
<?php $component->withName('event-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3044adc4e2a669ac1ace8e86a75e243af8d83bdd)): ?>
<?php $component = $__componentOriginal3044adc4e2a669ac1ace8e86a75e243af8d83bdd; ?>
<?php unset($__componentOriginal3044adc4e2a669ac1ace8e86a75e243af8d83bdd); ?>
<?php endif; ?>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="grid grid-cols-1 md:grid-cols-2">
                                
                                <div class=" float-left ml-4 text-lg leading-7 font-semibold">
                                    <h3>Artists</h3>
                                </div>
                                <div class="float-right ml-4 text-lg leading-7 font-semibold">
                                    <a  href="<?php echo e(url('search-artists')); ?>">Search for Artist</a>
                                </div>
                            </div>


                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <p><strong>Artists Performing in your local area</strong></p>
                                    <div>
                                        <?php if (isset($component)) { $__componentOriginala7e8ed389b57125b2994f0b169e4bb6c193c3f03 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ArtistList::class, []); ?>
<?php $component->withName('artist-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala7e8ed389b57125b2994f0b169e4bb6c193c3f03)): ?>
<?php $component = $__componentOriginala7e8ed389b57125b2994f0b169e4bb6c193c3f03; ?>
<?php unset($__componentOriginala7e8ed389b57125b2994f0b169e4bb6c193c3f03); ?>
<?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">








                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                            <a href="https://thenetnuts.com" class="ml-1 underline">
                                TheNetNuts
                            </a>

                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Built with Laravel v<?php echo e(Illuminate\Foundation\Application::VERSION); ?> (PHP v<?php echo e(PHP_VERSION); ?>)
                    </div>
                </div>
            </div>
        </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>


<?php /**PATH D:\xampp\htdocs\crazy\resources\views/frontend/index.blade.php ENDPATH**/ ?>