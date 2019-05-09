<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
<div class="title-area wow fadeInUp">
    <h2 class="title">Абонирайте се за нашия <span>бюлетин</span></h2>
    <p>
        За да се абонирате за нашия бюлетин, моля въведете вашия email:
    </p>
</div>
<div class="subscribe_container box">
    <?php if(\Session::has('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e(\Session::get('success')); ?></p>
    </div><br /> <?php endif; ?> <?php if(\Session::has('failure')): ?>
    <div class="alert alert-danger">
        <p><?php echo e(\Session::get('failure')); ?></p>
    </div><br /> <?php endif; ?>
</div>
<div class="subscribe-content wow fadeInLeft">
    <?php echo Form::open(['url'=>'newsletter/store','class'=>'subcr-form']); ?> <?php echo e(csrf_field()); ?>

    <i class="fa fa-envelope-o"></i>
    <div class="form-group">
        <?php echo Form::text('email', null, ['placeholder' => 'Въведете пощенския си адрес...'], ['class' => 'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::submit('Абонирай се', ['class' => 'subcr-btn']); ?>

    </div>
    <?php echo Form::close(); ?>

</div>
<?php echo nl2br(e('<br/>')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>