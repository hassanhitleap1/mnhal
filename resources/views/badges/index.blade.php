@extends('layout.app')
@section('title', 'Badges')
@section('content')
    <div class="block-header">
        <h2>@yield('title')</h2>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body table-responsive">
                    <div class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-4 float-right">
                                <a class="btn btn-primary waves-effect float-right btn-addbadges" onclick="showpopup();">@lang('lang.Add_Badges')</a>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th class="sorting_asc">@lang('lang.Name_Ar')</th>
                                <th>@lang('lang.Description_Ar')</th>
                                <th>@lang('lang.Category')</th>
                                <th>@lang('lang.Points')</th>
                                <th>@lang('lang.Action')</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>glory</td>
                                <td>good badges</td>
                                <td>Arabic</td>
                                <td>100</td>
                                <td class="action"><a onclick="showpopup();" class="btn-editbadges" title="@lang('lang.Edit')"><i class="material-icons">edit</i></a> <a title="@lang('lang.Delete')"><i class="material-icons">delete</i></a><a href="{{url('/')."/".Lang::getLocale()}}/students" class="btn-send-message-groups" title="@lang('lang.View')"><i class="material-icons">visibility</i></a></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info">
                                    <span class="pull-left">@lang('lang.Showing')</span><span class="pull-left">1 </span> <span class="pull-left">@lang('lang.to')</span>
                                    <span class="pull-left">10 </span><span class="pull-left">@lang('lang.of')</span><span class="pull-left">57</span><span class="pull-left">@lang('lang.Students')</span>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    <ul class="pagination">
                                        <li class="disabled">
                                            <a href="">
                                                <i class="material-icons">chevron_left</i>
                                            </a>
                                        </li>
                                        <li class="active"><a href="">1</a></li>
                                        <li><a href="" class="waves-effect">2</a></li>
                                        <li><a href="" class="waves-effect">3</a></li>
                                        <li><a href="" class="waves-effect">4</a></li>
                                        <li><a href="" class="waves-effect">5</a></li>
                                        <li>
                                            <a href="" class="waves-effect">
                                                <i class="material-icons">chevron_right</i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
