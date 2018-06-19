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
<body class="login-page">
<div class="login-box">
    <div class="logo1">
        <img src="/images/logoiphone.svg" class="logo-school" title="Almanhal schools" />
        <a>Almanhal schools</a>
    </div>
    <div class="card">
        <div class="body">
            <form id="sign_in" method="POST">
                <div class="msg">@lang('lang.Sign_in')</div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" placeholder="@lang('lang.Username')" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="@lang('lang.Password')" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-manhalgreen">
                        <label for="rememberme">@lang('lang.Remember_Me')</label>
                    </div>
                    <div class="col-xs-4">
                        <button  class="btn btn-block btn-primary waves-effect" type="submit">@lang('lang.Sign_in')</button>
                    </div>
                </div>
                <div class="row m-t-15 m-b-15 m-b--20">
                    <div class="col-xs-12 align-center">
                        <a href="{{url('/')."/".Lang::getLocale()}}/login/forgotpassword">@lang('lang.Forgot_Password')</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
