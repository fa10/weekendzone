@extends('layouts.default_layout')

@section('content')
<section class="page-section">
    <div class="container">
    <h2 class="small-title mb-40">Log ind<span class="st-point">.</span></h2>

<div class="row">
    <div class="col-md-offset-4 col-md-4">
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
           {!! Form::label('email', 'Email', ['class' => 'uppercase']) !!}
           {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Kodeord', ['class' => 'uppercase']) !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Log ind', ['class' => 'btn btn-mod pull-right']) !!}
        </div>

    {!! Form::close() !!}
    </div>
    </div>
    </div>
    </section>
@stop

