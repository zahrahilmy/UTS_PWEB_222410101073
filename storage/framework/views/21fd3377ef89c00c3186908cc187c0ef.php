

<?php $__env->startSection('title', 'Pengelolaan'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-0">
    <div class="card-header text-center" style="color:darkred; background-color: white;">
        <h4 class="mb-4">Look for more interesting information!</h4>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="table-light text-center" style="color: white;">
                        <tr>
                            <th width="10%">Bulan</th>
                            <th width="25%">Birth Flower</th>
                            <th>Funfact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><strong><?php echo e($item['id']); ?></strong></td>
                            <td><?php echo e($item['name']); ?></td>
                            <td><?php echo e($item['ff']); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\UTSPR\resources\views/pengelolaan.blade.php ENDPATH**/ ?>