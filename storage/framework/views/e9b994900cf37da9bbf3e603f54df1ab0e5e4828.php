


<?php $__env->startSection('container'); ?>
<article>
    <h2> <?php echo e($post["title"]); ?> </h2>
    <h5><?php echo e($post["author"]); ?></h5>
    <p><?php echo e($post["isi"]); ?></p>
</article>

<h2><a href="/Blog">back</a></h2>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel app\example-app\resources\views/post.blade.php ENDPATH**/ ?>