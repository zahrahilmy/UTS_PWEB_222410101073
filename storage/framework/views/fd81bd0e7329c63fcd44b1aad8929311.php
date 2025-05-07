

<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">
        <?php if(session('username')): ?>
            <div class="alert alert-info">
                Welcome, <strong><?php echo e(session('username')); ?></strong>!
            </div>
        <?php endif; ?>
    <div class="card shadow">
        <div class="card-body">
            <div class="">
                <h5 style="text-align: center;">Profile Information</h5>
                <hr>
                <div class="align-items-center">
                    <p class="mb-0">Email Address: user@gmail.com</p>
                    <button class="btn btn-link p-0 text-decoration-none" style="color: #4a6baf; font-size:x-small; "
                        data-bs-toggle="modal" data-bs-target="#forgotPasswordModal">Forgot Password?
                    </button>
                </div>
                <p class="mt-2">Birthday : Dec 30, 2000</p>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\UTSPR\resources\views/profile.blade.php ENDPATH**/ ?>