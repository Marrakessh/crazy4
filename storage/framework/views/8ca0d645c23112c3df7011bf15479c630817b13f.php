<div>
    <ul>
        <?php $__currentLoopData = $artists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card" style="width: 28rem;">
                <?php $__currentLoopData = $artist->artistimages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artistimage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img class="card-img-top img-thumbnail img-fluid" src="<?php echo e(asset('storage/images/artists/'.$artistimage->file_path)); ?>" alt="Card image cap">
                    <div class="caption">
                        <p> <?php echo e($artistimage->name); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="card-body">
                    <h5 class="card-title"><a href="<?php echo e(route('home.showartist',$artist->id)); ?>"> <li> <?php echo e($artist->name); ?></li></a></h5>
                    <p class="card-text"><?php echo e($artist->bio); ?></p>
                    <p class="card-text">Events <?php echo e($artist->name); ?> is performing at:
                    <ul class="list-inline">
                    <?php $__currentLoopData = $artist->events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-inline-item"><a href="<?php echo e(route('home.showevent',$event->id)); ?>"><?php echo e($event->title); ?></a> |</li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH D:\xampp\htdocs\crazy\resources\views/components/artist-list.blade.php ENDPATH**/ ?>