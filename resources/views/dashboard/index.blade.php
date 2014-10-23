@extends('dashboard.layouts.dashboard_layout')


@section('content')
<section class="page-section small-section">
    <div class="container">
        <h1 class="small-title">Welcome to the dashboard <span class="uppercase color">{!! Auth::check() ? "" . Auth::user()->firstName : "" !!}</span></h1>
    </div>
</section>
@stop