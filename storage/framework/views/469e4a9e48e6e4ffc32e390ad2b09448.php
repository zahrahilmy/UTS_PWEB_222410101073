

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card-body">
            <?php if(isset($username)): ?>
                <div class="alert alert-success">
                    Welcome, <strong><?php echo e($username); ?></strong>!
                </div>
            <?php endif; ?>
    </div>

    <h2 class="text-center mb-5">Find Your Birth Flower!</h2>
    <div class="row justify-content-center g-4">
        <?php $__currentLoopData = $flowers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flower): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
                <div class="card flower-card h-100 mx-auto" style="width: 100%; max-width: 420px;">
                    <div class="row g-0 h-100">
                        <div class="col-md-5">
                            <img src="<?php echo e(asset('assets/'.$flower['image'])); ?>" 
                                 class="img-fluid rounded-start h-100" 
                                 alt="<?php echo e($flower['name']); ?>"
                                 style="object-fit: cover; min-height: 220px;"
                                 loading="lazy">
                        </div>
                        <div class="col-md-7 d-flex flex-column">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?php echo e($flower['name']); ?></h5>
                                <p class="card-text mt-3">
                                    <?php echo e($flower['desc']); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\UTSPR\resources\views/dashboard.blade.php ENDPATH**/ ?>