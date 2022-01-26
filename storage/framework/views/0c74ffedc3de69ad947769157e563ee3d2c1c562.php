<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Event Admin</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <!-- Bootstrap core CSS -->


    <!-- Custom styles for this template -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

      <link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/event.css')); ?>">

      <?php echo \Livewire\Livewire::styles(); ?>


  </head>

  <body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">


            <!-- Logo -->



            <!-- Navigation Links -->






            <div class="hidden  px-3 sm:-my-px sm:ml-10 sm:flex">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.nav-link','data' => ['href' => ''.e(route('home.index')).'']]); ?>
<?php $component->withName('jet-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('home.index')).'']); ?>
                    
                    <?php echo e(__('Home')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>

            <ul class="navbar-nav px-3">
                <li class="sm:-my-px sm:flex">
                    <a class="navbar-brand nav-item" href="<?php echo e(route('home.index')); ?>">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.application-mark','data' => ['class' => 'block h-2 w-auto']]); ?>
<?php $component->withName('jet-application-mark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'block h-2 w-auto']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </a>
                </li>
            </ul>




      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">


            <!-- Authentication -->
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']); ?>
                    <?php echo e(__('Log Out')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </form>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">

              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('home.index')); ?>">
                  <span data-feather="home"></span>
Front End           
                </a>
              </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('event.index')); ?>" >
                    <span data-feather="star"></span>
Events
                </a>
            </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('venue.index')); ?>">
                        <span data-feather="home"></span>
Venues
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('venueimage.index')); ?>">
                        <span data-feather="camera"></span>
Venue Pic
                    </a>
                </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('artist.index')); ?>">
                  <span data-feather="users"></span>
Artists
                </a>
              </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('artistimage.index')); ?>">
                        <span data-feather="camera"></span>
Artist Pic
                    </a>
                </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('genre.index')); ?>">
                  <span data-feather="music"></span>
Genres
                </a>
              </li>



                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Bookings</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>

              <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('customer.index')); ?>">
                      <span data-feather="users"></span>
Customers
                  </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('booking.index')); ?>">
                      <span data-feather="tag"></span>
Bookings
                  </a>
              </li>
            </ul>

































          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h3 class="h3">Dashboard</h3>










          </div>
            <!-- Page Content -->
            <main>
                <?php echo $__env->yieldContent('content'); ?>

                <?php if( isset($slot) ): ?>
                    <?php echo e($slot); ?>

                <?php endif; ?>
                <?php echo \Livewire\Livewire::scripts(); ?>

            </main>

        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>

    <script>
        feather.replace()
    </script>

    <?php echo $__env->yieldPushContent('modals'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>


  <script>
      //Script to set current nav-item to 'active'
      $(document).ready(function() {

          var url = [location.protocol, '//', location.host, location.pathname].join('');

          $('.nav-item.active').removeClass('active');
          $('.nav-item a[href="' + url  + '"]').parent().addClass('active');
          $(this).parent().addClass('active').siblings().removeClass('active');
      });
  </script>

  </body>
</html>

<?php /**PATH D:\xampp\htdocs\crazy\resources\views/admin/layout.blade.php ENDPATH**/ ?>