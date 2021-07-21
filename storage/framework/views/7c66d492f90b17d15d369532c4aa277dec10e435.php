<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('../resources/js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo e(asset('../resources/css/bootstrap.min.css')); ?>">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo e(asset('../resources/css/style.css')); ?>">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?php echo e(asset('../resources/css/responsive.css')); ?>">
    <!-- fevicon -->
    <link rel="icon" href="<?php echo e(asset('../resources/images/fevicon.png')); ?>" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('../resources/css/jquery.mCustomScrollbar.min.css')); ?>">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="<?php echo e(asset('../resources/css/app.css')); ?>" rel="stylesheet">
    
    <!-- Table CSS -->
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../resources/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../resources/fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../resources/vendor/animate/animate.css')); ?>">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../resources/vendor/select2/select2.min.css')); ?>">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../resources/vendor/perfect-scrollbar/perfect-scrollbar.css')); ?>">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../resources/css/util.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../resources/css/main.css')); ?>">
    <!--===============================================================================================-->
</head>
<body>
<header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="<?php echo e(asset('../resources/images/logo.jpg')); ?>" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="<?php ; ?>"> <a href="index.html">Home</a> </li>
                                        
                            <!-- Authentication Links -->
                            <?php if(auth()->guard()->guest()): ?>
                                <?php if(Route::has('login')): ?>
                                    <li class="">
                                        <a class="" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if(Route::has('register')): ?>
                                    <li class="">
                                        <a class="" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php else: ?>
                                        <li> <a href="<?php echo e(url('/album')); ?>">Artist</a> </li>
                                        <li> <a href="<?php echo e(url('/album')); ?>"> Albums</a> </li>
                                        <li> <a href="<?php echo e(url('/album')); ?>">Track</a> </li>
                                        <li> <a href="<?php echo e(url('/album')); ?>">Play</a> </li>
                                        <li class="">
                                    <a id="navbarDropdown" class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <?php echo e(Auth::user()->name); ?>

                                    </a>

                                    <div class="" aria-labelledby="navbarDropdown">
                                        <a class="" href="<?php echo e(route('logout')); ?>"
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
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                        <form class="search">
                            <input class="form-control" type="text" placeholder="Search">
                            <button><img src="images/search_icon.png"></button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- end header inner -->
    </header>
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel_satria_uts\resources\views/layouts/header.blade.php ENDPATH**/ ?>