@extends('layout.app')
@section('title', 'Home')
@section('content')
<div class="block-header">
    <h2>@yield('title')</h2>
</div>
<div class="content">
    @lang('lang.welcome')
    <div class="body">
        <div class="row clearfix js-sweetalert">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <button class="btn btn-primary waves-effect" data-type="basic">CLICK ME</button>
            </div>
            <br>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <button class="btn btn-primary waves-effect" data-type="with-title">CLICK ME</button>
            </div>
            <br>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <button class="btn btn-primary waves-effect" data-type="success">CLICK ME</button>
            </div>
            <br>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <button class="btn btn-primary waves-effect" data-type="confirm">CLICK ME</button>
            </div>
            <br>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <button class="btn btn-primary waves-effect" data-type="cancel">CLICK ME</button>
            </div>
            <br>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <button class="btn btn-primary waves-effect" data-type="with-custom-icon">CLICK ME</button>
            </div>
            <br>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <button class="btn btn-primary waves-effect" data-type="html-message">CLICK ME</button>
            </div>
            <br>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <button class="btn btn-primary waves-effect" data-type="autoclose-timer">CLICK ME</button>
            </div>
            <br>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <button class="btn btn-primary waves-effect" data-type="prompt">CLICK ME</button>
            </div>
            <br>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <button class="btn btn-primary waves-effect" data-type="ajax-loader">CLICK ME</button>
            </div>
            <br>

        </div>
    </div>
</div>

@endsection
