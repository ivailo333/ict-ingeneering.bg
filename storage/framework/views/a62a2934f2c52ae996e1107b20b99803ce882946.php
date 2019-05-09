
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    <div>
        <h3 class="center">Моля, изберете един от начините, които са дадени по-долу за плащане на избраната услуга:</h3>
        <?php echo Form::open(['url'=>'/payment/store','class'=>'form', 'method'=>'post']); ?>

        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <?php echo Form::radio('pay','cash',false,array('id'=>'pay','onclick'=>'payment()')); ?>

            <?php echo Form::label('pay','В брой'); ?>

        </div>
        <div class="form-group">
            <?php echo Form::radio('pay','bank_transfer',false,array('id'=>'pay','onclick'=>'payment()')); ?>

            <?php echo Form::label('pay','Банков превод'); ?>

        </div>
        <div class="form-group">
            <?php echo Form::radio('pay','credit_card',false,array('id'=>'pay','onclick'=>'payment()')); ?>

            <?php echo Form::label('pay','Кредитна/дебитна карта'); ?>

        </div>
        <div class="form-group">
            <?php echo Form::radio('pay','pay_pal',false,array('id'=>'pay','onclick'=>'payment()')); ?>

            <?php echo Form::label('pay','Чрез платежната система на PayPal'); ?>

        </div>
        <div class="form-group">
            <?php echo Form::radio('pay','easy_pay',false,array('id'=>'pay','onclick'=>'payment()')); ?>

            <?php echo Form::label('pay','Чрез платежната система на EasyPay'); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('payment_method','',array('id'=>'payment_method')); ?>

        </div>

        <?php echo Form::submit('Submit', ['class' => 'btn btn-lg btn-info']); ?>

        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>

<script type="text/javascript" src="js/payment.js"></script>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>