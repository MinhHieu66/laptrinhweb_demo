<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <style>
        .navbar{
            border: 1px solid black;
        }

        .navbar a {
            color: black;
        }
    </style>
    <script type="text/javascript" src="<?php echo e(asset('js/scripts.js')); ?>"></script>
</head>
<body>

<nav class="navbar navbar-light navbar-expand-lg mb-5">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  m-auto">
                <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('user.createUser')); ?>">Đăng ký</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('signout')); ?>">Đăng xuất</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php echo $__env->yieldContent('content'); ?>
<footer class="border pt-2 text-center mb-1">
    <p>Lập trình web @01/2025</p>
  </footer>
</body>
</html>
<?php /**PATH D:\HK4\BE2\laptrinhweb_demo.git\example-app\resources\views/dashboard.blade.php ENDPATH**/ ?>