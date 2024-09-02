<?php $__env->startSection('content'); ?>


    <div class="container mt-5">
        <h1 style="color: white"> Products</h1>
        <table class="table align-middle mb-0 bg-white mt-5">
            <thead class="bg-light">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>


            </tr>
            </thead>
            <tbody>

          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <tr>
                  <td>
                      <div class="d-flex align-items-center">
                          <img
                              src="<?php echo e(asset('storage/'.$product->image)); ?>"
                              alt=""
                              style="width: 45px; height: 45px"
                              class="rounded-circle"
                          />

                      </div>
                  </td>
                  <td>
                    <?php echo e($product->name); ?>

                  </td>  <td>
                    <?php echo e($product->description); ?>

                  </td>
                  <td>
                      <span class="badge badge-success rounded-pill d-inline"><?php echo e($product->price); ?></span>
                  </td>
                  <td><?php echo e($product->quantity); ?></td>

                  <td class="text-right"> <a href="<?php echo e(route('products.edit',$product)); ?>" style="background-color:  #D5A153FF" class="btn  btn-primary">
                          Update
                      </a></td>
                  <td class="text-left">
                      <form action="<?php echo e(route('products.destroy',$product->id)); ?>"
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\PhpstormProjects\untitled11\Eco-didous\resources\views/products.blade.php ENDPATH**/ ?>