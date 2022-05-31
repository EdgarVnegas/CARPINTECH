<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                     <!-- Referencias del menu -->
                      <!-- Referencias del menu -->
                       <!-- Referencias del menu -->
                    <li class="nav-item">

                    <a class="nav-link" href="<?php echo e(route('empleado.index')); ?>"><?php echo e(__('Empleado')); ?></a>

                    </li>



                    <li class="nav-item">

                    <a class="nav-link" href="<?php echo e(route('cliente.index')); ?>"><?php echo e(__('Cliente')); ?></a>

                    </li>


                    <li class="nav-item">

                    <a class="nav-link" href="<?php echo e(route('cita.index')); ?>"><?php echo e(__('Cita')); ?></a>

                    </li>

                    <li class="nav-item">

                    <a class="nav-link" href="<?php echo e(route('producto.index')); ?>"><?php echo e(__('Producto')); ?></a>

                    </li>


                    
                    <li class="nav-item">

                    <a class="nav-link" href="<?php echo e(route('bodega.index')); ?>"><?php echo e(__('Bodega')); ?></a>

                    </li>


                    
                    <li class="nav-item">

                    <a class="nav-link" href="<?php echo e(route('herramienta.index')); ?>"><?php echo e(__('Herramienta')); ?></a>

                    </li>


                    
                    <li class="nav-item">

                    <a class="nav-link" href="<?php echo e(route('material.index')); ?>"><?php echo e(__('Material')); ?></a>

                    </li>


                    
                    <li class="nav-item">

                    <a class="nav-link" href="<?php echo e(route('proveedor.index')); ?>"><?php echo e(__('Proveedor')); ?></a>

                    </li>

                    <li class="nav-item">

                    <a class="nav-link" href="<?php echo e(route('transporte.index')); ?>"><?php echo e(__('Transporte')); ?></a>

                    </li>

                    <li class="nav-item">

                    <a class="nav-link" href="<?php echo e(route('venta.index')); ?>"><?php echo e(__('Venta')); ?></a>

                    </li>


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/layouts/app.blade.php ENDPATH**/ ?>