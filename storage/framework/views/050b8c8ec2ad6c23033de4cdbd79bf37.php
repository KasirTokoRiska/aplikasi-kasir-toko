<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(config('app.name')); ?><?php echo e(isset($title) ? ' | ' . $title : ''); ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css?v=3.2.0">
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body onload="javascript:window.print()">
    <?php echo $__env->yieldContent('content'); ?>
    
</body>
</html><?php /**PATH C:\xampp2\htdocs\kasir-toko-riska\resources\views/layouts/laporan.blade.php ENDPATH**/ ?>