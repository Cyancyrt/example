

<?php $__env->startSection('container'); ?>
<h2>about</h2>
<h3> <?php echo e($name); ?> </h3>
<h3><?php echo e($email); ?></h3>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel app\example-app\resources\views/About.blade.php ENDPATH**/ ?>