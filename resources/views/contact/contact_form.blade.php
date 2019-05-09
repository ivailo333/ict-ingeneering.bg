@extends('layouts.master') 
@section('title', $title) 
@section('content')
<div class="contact_container box">
    <h3>Изпратете вашето запитване!</h3><br /> @if (count($errors) > 0)
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
</div>
{!! Form::open(['url'=>'contact/send','class'=>'form'])!!} {{ csrf_field() }}

<div class="form-group">
    {!! Form::label('name','Вашето име:') !!} {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email','Вашият email:') !!} {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('message','Вашето съобщение:') !!} {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Recaptcha::render() !!}
</div>

<div class="form-group">
    {!! Form::checkbox('Terms_Conditions',null) !!} {!! Form::label('Terms_and_Conditions','Приемам') !!} <a href="/terms_and_conditions" target="_blank"><strong>общите условия за ползване.</strong></a>
</div>

<div class="form-group">
    {!! Form::checkbox('Privacy_Policy',null) !!} {!! Form::label('Privacy_Policy','Приемам') !!} <a href="/privacy_policy" target="_blank"><strong>политиката за поверителност.</strong></a>
</div>

{!! Form::submit('Submit', ['class' => 'btn btn-info']) !!} {!! Form::close() !!}
@endsection

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