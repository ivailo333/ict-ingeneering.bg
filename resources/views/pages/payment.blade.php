@extends('layouts.master')
@section('title', $title)
@section('content')
    <div>
        <h3 class="center">Моля, изберете един от начините, които са дадени по-долу за плащане на избраната услуга:</h3>
        {!! Form::open(['url'=>'/payment/store','class'=>'form', 'method'=>'post']) !!}
        {{csrf_field()}}
        <div class="form-group">
            {!! Form::radio('pay','cash',false,array('id'=>'pay','onclick'=>'payment()'))!!}
            {!! Form::label('pay','В брой') !!}
        </div>
        <div class="form-group">
            {!! Form::radio('pay','bank_transfer',false,array('id'=>'pay','onclick'=>'payment()')) !!}
            {!! Form::label('pay','Банков превод') !!}
        </div>
        <div class="form-group">
            {!! Form::radio('pay','credit_card',false,array('id'=>'pay','onclick'=>'payment()')) !!}
            {!! Form::label('pay','Кредитна/дебитна карта') !!}
        </div>
        <div class="form-group">
            {!! Form::radio('pay','pay_pal',false,array('id'=>'pay','onclick'=>'payment()')) !!}
            {!! Form::label('pay','Чрез платежната система на PayPal') !!}
        </div>
        <div class="form-group">
            {!! Form::radio('pay','easy_pay',false,array('id'=>'pay','onclick'=>'payment()')) !!}
            {!! Form::label('pay','Чрез платежната система на EasyPay') !!}
        </div>

        <div class="form-group">
            {!! Form::label('payment_method','',array('id'=>'payment_method')) !!}
        </div>

        {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info']) !!}
        {!! Form::close() !!}
    </div>
@endsection

<script type="text/javascript" src="js/payment.js"></script>