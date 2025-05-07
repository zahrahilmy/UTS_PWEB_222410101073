<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php echo $__env->yieldPushContent('styles'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --bs-font-sans-serif: 'Poppins', system-ui, -apple-system, sans-serif;
        }
        
        body {
            font-family: var(--bs-font-sans-serif);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding-top: 70px; /* Adjust for fixed navbar */
        }
        
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1030;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            background-color:bisque;
        }
        
        .content-wrapper {
            flex: 1;
        }
        
        /*Style flower card*/
        .flower-card {
            cursor: pointer;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border: none;
            margin-bottom: 1.5rem;
            min-height: 400px;
            text-align: justify;
            padding-right: 2%;
        }
        
        
        .flower-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        }
        
        .card-img-top {
            height: 280px;
            object-fit: cover;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }
        .card-title {
            font-weight: 600;
            color: #4a6baf;
        }
        /* Style tabel pengelolaan */
        .table-hover tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.1);
        }
        .table th {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
            background-color:cornsilk;
        }

        /* profile */
        .profile-card {
            border-radius: 10px;
            overflow: hidden;
        }
        .profile-alert {
            border-left: 4px solid #4a6baf;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .flower-card {
                max-width: 100% !important;
            }
            .col-md-5, .col-md-7 {
                width: 100% !important;
            }
            .img-fluid {
                height: 250px !important;
                width: 100% !important;
                object-fit: cover !important;
            }
        }
    </style>
</head>
<body class="d-flex flex-column h-100">
    <?php if (! (request()->is('login'))): ?>
        <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
    <main class="content-wrapper py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\Users\USER\UTSPR\resources\views/layouts/app.blade.php ENDPATH**/ ?>