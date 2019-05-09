 
<?php $__env->startSection('title', $title); ?> 
<?php $__env->startSection('content'); ?>
<div class="contact_container box">
    <h3>Изпратете вашето запитване!</h3><br /> <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?> <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo e($message); ?></strong>
    </div>
    <?php endif; ?>
</div>
<?php echo Form::open(['url'=>'contact/send','class'=>'form']); ?> <?php echo e(csrf_field()); ?>


<div class="form-group">
    <?php echo Form::label('name','Вашето име:'); ?> <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('email','Вашият email:'); ?> <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('message','Вашето съобщение:'); ?> <?php echo Form::textarea('message', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Recaptcha::render(); ?>

</div>

<div class="form-group">
    <?php echo Form::checkbox('Terms_Conditions',null); ?> <?php echo Form::label('Terms_and_Conditions','Приемам'); ?> <a href="/terms_and_conditions" target="_blank"><strong>общите условия за ползване.</strong></a>
</div>

<div class="form-group">
    <?php echo Form::checkbox('Privacy_Policy',null); ?> <?php echo Form::label('Privacy_Policy','Приемам'); ?> <a href="/privacy_policy" target="_blank"><strong>политиката за поверителност.</strong></a>
</div>

<?php echo Form::submit('Submit', ['class' => 'btn btn-info']); ?> <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<div class="data_contact">
    <h3>ИКТ Инженеринг ЕООД</h3>
    <p class="address">
        <strong>Адрес:</strong><br /> гр. Благоевград, пк. 2700<br /> ул. "Свобода" №1<br /> тел.: 0897855572
        <br /> email: iktingenering@abv.bg <br />
    </p>
</div>

<div class="mapouter">
    <div class="gmap_canvas"><iframe width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Blagoevgrad%2C%20ul.%20Svoboda%201&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
</div>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>