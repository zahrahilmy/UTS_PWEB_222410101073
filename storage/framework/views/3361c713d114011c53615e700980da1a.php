    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('dashboard')); ?>">
                <img src="<?php echo e(asset('assets/logo-navbar.png')); ?>" 
                    alt="Logo Aplikasi" 
                    class="d-inline-block align-text-top" 
                    style="height: 30px;">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">                
                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="<?php echo e(route('pengelolaan')); ?>">Details</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="<?php echo e(route('profile', ['username' => request()->query('username')])); ?>">Profile</a>  
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php /**PATH C:\Users\USER\UTSPR\resources\views/components/navbar.blade.php ENDPATH**/ ?>