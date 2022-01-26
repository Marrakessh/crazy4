<div>
    <ul>
    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card" style="width: 28rem;">
                <?php $__currentLoopData = $event->venue->venueimages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venueimage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img class="card-img-top img-thumbnail img-fluid" src="<?php echo e(asset('storage/images/venues/'.$venueimage->file_path)); ?>" alt="Card image cap">
                    <div class="caption">
                        <p> <?php echo e($venueimage->name); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="card-body">
                    <h2 class="card-title"><a href="<?php echo e(route('home.showevent',$event->id)); ?>"> <li> <?php echo e($event->title); ?></li></a> at <?php echo e($event->venue->name); ?></h2>
                    <p class="card-text"><?php echo e($event->description); ?></p>
                    <strong><p class="card-text"><?php echo e(Carbon\Carbon::parse($event->datetime)->format('l jS \of F Y')); ?></p></strong>
                    <p class="card-text"><?php echo e(Carbon\Carbon::parse($event->datetime)->format('g:i a')); ?></p>
                    <a href="<?php echo e(route('home.showevent',$event->id)); ?>" class="btn btn-primary">More Info</a>
                </div>
            </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH D:\xampp\htdocs\crazy\resources\views/components/event-list.blade.php ENDPATH**/ ?>