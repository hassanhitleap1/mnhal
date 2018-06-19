<?php
/**
 * Created by PhpStorm.
 * User: Odai
 * Date: 4/15/2018
 * Time: 3:59 PM
 */
?>

        <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/librarys.js')}}"></script>
</head>
<body class="fp-page">
<div class="fp-box">
    <div class="logo">
        <img src="/images/logoiphone.svg" class="logo-school" title="Alhasad schools" />
        <a>Almanhal schools</a>
    </div>
    <div class="card">
        <div class="body">
            <form id="forgot_password" method="POST">
                <div class="msg">
                    @lang('lang.Reset_Your_Password')
                    <span>@lang('lang.Enter_your_email_reset')</span>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" placeholder="@lang('lang.Email')" required autofocus>
                    </div>
                </div>

                <button class="btn btn-block btn-lg btn-primary waves-effect" type="submit">@lang('lang.Send')</button>

                <div class="row m-t-20 m-b--5 align-center">
                    <a href="{{url('/')."/".Lang::getLocale()}}/login/signin">@lang('lang.Sign_in')</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
