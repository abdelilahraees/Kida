<?php $__env->startSection('content'); ?>

    <div class="container mt-5">
        <h1 style="color: white"> Commands</h1>
        <table class="table align-middle mb-0 bg-white mt-5">
            <thead class="bg-light">
            <tr>
                <th>#</th>
                <th>#ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Product</th>
                <th>price</th>
            </tr>
            </thead>
            <tbody>


            <?php $__currentLoopData = $commands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $command): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                src="<?php echo e(asset('storage/'.$command->product->image)); ?>"
                                alt=""
                                style="width: 45px; height: 45px"
                                class="rounded-circle"
                            />

                    </td>
                    <td>
                        <?php echo e($command->id); ?>

                    </td>
                    <td>
                        <?php echo e($command->name); ?>

                    </td>
                    <td>
                        <?php echo e($command->phone); ?>

                    </td>
                    <td><?php echo e($command->address); ?></td>
                    <td>
                        <?php echo e($command?->product?->name); ?>

                    </td>
                    <td>
                        <?php echo e($command?->product?->price); ?>

                    </td>
                    <td class="text-left">
                        <form action="<?php echo e(route('commands.destroy',$command->id)); ?>"
                              method="post"><?php echo method_field('DELETE'); ?><?php echo csrf_field(); ?>

                            <button type="submit" class="btn btn-danger mr-3">Delete</button>
                        </form>
                    </td>
                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\PhpstormProjects\untitled11\Eco-didous\resources\views/home.blade.php ENDPATH**/ ?>