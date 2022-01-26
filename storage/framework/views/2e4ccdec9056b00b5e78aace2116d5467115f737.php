<?php $__env->startSection('content'); ?>
<div class="card mt-5">
    <div class="card-header">
        <div class="float-left">
        <h3>Customer Admin Panel</h3>
        </div>
        <div class="float-right ml-4 text-xl leading-7 font-semibold ">
            <a class="h4" href="<?php echo e(url('customer-lastname-search')); ?>">Search for Customer</a>
        </div>








    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 mt-1 mr-1">
                <div class="float-right">
                    <a class="btn btn-success" href="<?php echo e(route('customer.create')); ?>"> Add Customer</a>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-12">
                <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <p><?php echo e($message); ?></p>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Cust ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Post Code</th>
                        <th width="280px">Action</th>
                    </tr>
                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($customer->id); ?></td>
                        <td><?php echo e($customer->firstname); ?></td>
                        <td><?php echo e($customer->lastname); ?></td>
                        <td><?php echo e($customer->postcode); ?></td>
                        <td>
                            <form action="<?php echo e(route('customer.destroy',$customer->id)); ?>" method="POST">

                                <a class="btn btn-info" href="<?php echo e(route('customer.show',$customer->id)); ?>">Show</a>

                                <a class="btn btn-primary" href="<?php echo e(route('customer.edit',$customer->id)); ?>">Edit</a>

                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                <?php echo $customers->links(); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\crazy\resources\views/customer/index.blade.php ENDPATH**/ ?>