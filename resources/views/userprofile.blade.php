@extends('layout.app')
@section('title', 'User Profile')
@section('content')
<div class="block-header">
    <h2>@yield('title')</h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <label>@lang('lang.Username')</label>
                                <input type="text" class="form-control" placeholder="@lang('lang.Username')" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <label>@lang('lang.First_Name')</label>
                                <input type="text" class="form-control" placeholder="@lang('lang.First_Name')" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <label>@lang('lang.Password')</label>
                                <input type="password" class="form-control" placeholder="@lang('lang.Password')" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <label>@lang('lang.Phone')</label>
                                <input type="text" class="form-control" placeholder="@lang('lang.Phone')" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <label>@lang('lang.Email')</label>
                                <input type="text" class="form-control" placeholder="@lang('lang.Email')" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <label>@lang('lang.Birth_of_Date')</label>
                                <input type="text" class="datepicker form-control" placeholder="@lang('lang.Please_choose_a_date')" data-dtp="dtp_ZYZzi">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <label>Country</label>
                                <select class="form-control show-tick">
                                    <option value="Jordan">Jordan</option>
                                    <option value="Lebanon">Lebanon</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <label>@lang('lang.Gender')</label>
                                <select class="form-control show-tick">
                                    <option value="Male">@lang('lang.Male')</option>
                                    <option value="Female">@lang('lang.Female')</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <label>@lang('lang.Address')</label>
                                <input type="text" class="form-control" placeholder="@lang('lang.Address')"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <label>@lang('lang.Upload_avatar')</label>
                                    <label class="input-group-btn">
                                        <span class="btn btn-primary"> @lang('lang.Browse')<input type="file" style="display: none;" multiple=""> </span>
                                    </label>
                                    <input type="text" class="form-control" style="display: none" readonly="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
