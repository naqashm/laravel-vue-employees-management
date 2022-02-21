

<?php $__env->startSection('content'); ?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">States</h1>
    </div>
    <div class="row">
        <div class="card mx-auto">
            <div>
                <?php if(session()->has('message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('message')); ?>

                    </div> 
                <?php endif; ?>
            </div>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form method="GET" action="<?php echo e(route('states.index')); ?>">
                            <div class="form-row align-items-center">
                              <div class="col">
                                <input type="search" name="search" class="form-control mb-2" id="inlineFormInput" placeholder="Search" value="<?php echo e(Request::get('search')); ?>">
                              </div>
                              <div class="col">
                                  <button type="submit" class="btn btn-primary mb-2">Search</button>
                              </div>
                              
                            </div>
                        </form>
                    </div>
                    <div>
                        <a href="<?php echo e(route('states.create')); ?>" class="btn btn-primary mb-2">Create</a>
                    </div>
                </div>
            </div>
    
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Country Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($state->id); ?></th>
                            <td><?php echo e($state->country->country_code); ?></td>
                            <td><?php echo e($state->name); ?></td>
                            <td>
                                <a href="<?php echo e(route('states.edit', $state->id)); ?>" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel learning\employees\resources\views/states/index.blade.php ENDPATH**/ ?>