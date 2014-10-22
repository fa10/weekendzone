@extends('layouts.default_layout')

@section('content')
<section class="page-section">
    <div class="container">
    <h2 class="small-title mb-40">Opret Bruger<span class="st-point">.</span></h2>


<div class="row">
<div class="col-md-offset-3 col-md-6">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert error">
            <i class="fa fa-lg  fa-times-circle"></i>
            {{ $error }}
            </div>
        @endforeach
    @endif

    {!! Form::open(['class' => 'form']) !!}

        <div class="form-group">
            {!! Form::label('firstName', 'Navn', ['class' => 'uppercase']) !!}
            {!! Form::text('firstName', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('lastName', 'Efternavn', ['class' => 'uppercase']) !!}
            {!! Form::text('lastName', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email', ['class' => 'uppercase']) !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Kodeord:', ['class' => 'uppercase']) !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password_confirmation', 'Gentag Kodeord', ['class' => 'uppercase']) !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Opret Bruger', ['class' => 'btn btn-mod pull-right']) !!}
        </div>

    {!! Form::close() !!}
    </div>
    </div>
    </div>
</section>
@stop