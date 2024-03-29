<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Music Player')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/
bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <style>
    html, body {
            background-color: azure;
            color: #636b6f;
            font-family: 'Cambria', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
    }
    table {
        margin:10px;
        border-collapse: collapse;
        width: 100%;
        }
    table th {
        text-align: center;
        width: 300px;
        padding: 10px;
        background-color: lightblue;
        color: #ffffff;
        border: 2px solid gainsboro;
        border-radius: 10px;
    }
    table td {
        text-align: left;
        padding:10px;
        object-position: center;
        left: 20px;
        background-color: powderblue;
        border: 2px solid gainsboro;
        border-radius: 10px;
    }
    .cen{
        text-align: center;
    }
    #tbh {
        padding: 2px 10px 3px 10px;
        background-color: white;
        border: 2px midnightblue;
        border-radius: 50px;
        font-size: 20px;
        font-weight: bolder;
        text-decoration: none;
        color: royalblue;
        margin-top: 5px;
        margin-left: 10px;
    }

    #tbh:hover,#btn:hover {
        background-color: lightblue;
    }
    #app{
        border-radius: 50px;
    }
}
</style>
</head>
<body>
    <div id="header">
    </div>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light"style="background-color:   #B0E0E6;">
            <div class="container">
                <a id="app" class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Music Player')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <a class="nav-link" href="<?php echo e(url('/artis')); ?>">Artis</a>
                            <a class="nav-link" href="<?php echo e(url('/album')); ?>">Album</a>
                            <a class="nav-link" href="<?php echo e(url('/track')); ?>">Track</a>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> Hello,
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span> !
                                </a>

                                <div class="dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
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
<footer>
            Copyright 2020 &copy; Programmed By Maliha Sinaga
    </footer>
    <style type="text/css">
footer {
  text-align: center;
  padding: 3px;
  background-color: powderblue;
  color: midnightblue;
  position:absolute;
    bottom:0px;
    width:100%;
}
</style>
</html>
<?php /**PATH C:\xampp\htdocs\uas final\resources\views/layouts/app.blade.php ENDPATH**/ ?>