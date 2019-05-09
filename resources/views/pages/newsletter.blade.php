@extends('layouts.master')
@section('title', $title)
@section('content')
<div class="title-area wow fadeInUp">
    <h2 class="title">Абонирайте се за нашия <span>бюлетин</span></h2>
    <p>
        За да се абонирате за нашия бюлетин, моля въведете вашия email:
    </p>
</div>
<div class="subscribe_container box">
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
    </div><br /> @endif @if (\Session::has('failure'))
    <div class="alert alert-danger">
        <p>{{ \Session::get('failure') }}</p>
    </div><br /> @endif
</div>
<div class="subscribe-content wow fadeInLeft">
    {!! Form::open(['url'=>'newsletter/store','class'=>'subcr-form'])!!} {{ csrf_field() }}
    <i class="fa fa-envelope-o"></i>
    <div class="form-group">
        {!! Form::text('email', null, ['placeholder' => 'Въведете пощенския си адрес...'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Абонирай се', ['class' => 'subcr-btn']) !!}
    </div>
    {!! Form::close() !!}
</div>
{!! nl2br(e('<br/>')) !!}
@endsection
