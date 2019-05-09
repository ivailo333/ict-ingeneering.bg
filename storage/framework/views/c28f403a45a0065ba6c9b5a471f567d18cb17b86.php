<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>

<?php echo Form::open(['route' => 'contact.store', 'class' => 'form']); ?>


<div class="form-group">
    <?php echo Form::label('name','Вашето име:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('email','Вашият email:'); ?>

    <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('msg','Вашето съобщение:'); ?>

    <?php echo Form::textarea('msg', null, ['class' => 'form-control']); ?>

</div>


<?php echo Form::submit('Submit', ['class' => 'btn btn-info']); ?>




<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>