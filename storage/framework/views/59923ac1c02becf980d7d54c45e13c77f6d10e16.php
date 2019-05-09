<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>
<div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>