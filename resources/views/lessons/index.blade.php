@extends('layout.app')
@section('title', __('lang.Lessons'))
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
                            <div class="col-sm-3 float-left">
                                <form class="form-horizontal">
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
                                            <label class="float-left">@lang('lang.Domain')</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                            <div class="form-group">
                                                <div class="form-line float-left">
                                                    <select class="form-control show-tick">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-3 float-left">
                                <form class="form-horizontal">
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
                                            <label class="float-left">@lang('lang.Pivot')</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                            <div class="form-group">
                                                <div class="form-line float-left">
                                                    <select class="form-control show-tick">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-3 float-left">
                                <form class="form-horizontal">
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
                                            <label class="float-left">@lang('lang.Standard')</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                            <div class="form-group">
                                                <div class="form-line float-left">
                                                    <select class="form-control show-tick">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-3 float-right">
                                <a class="btn btn-primary waves-effect float-right btn-addLessons" onclick="showpopup();">@lang('lang.Add_Lessons')</a>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th class="sorting_asc">@lang('lang.Title')</th>
                                <th>@lang('lang.Description')</th>
                                <th>@lang('lang.Category')</th>
                                <th>@lang('lang.Level')</th>
                                <th>@lang('lang.Teacher')</th>
                                <th>@lang('lang.Action')</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>glory</td>
                                <td>good badges</td>
                                <td>Arabic</td>
                                <td>2</td>
                                <td>oday</td>
                                <td class="action">
                                    <a onclick="showpopup();" class="btn-editLessons" title="@lang('lang.Edit')"><i class="material-icons">edit</i></a>
                                    <a title="@lang('lang.Delete')"><i class="material-icons">delete</i></a>
                                    <a onclick="showpopup();" class="btn-assignlesson" title="@lang('lang.Assign_Lesson')"><i class="material-icons">send</i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info">
                                    <span class="pull-left">@lang('lang.Showing')</span><span class="pull-left">1 </span> <span class="pull-left">@lang('lang.to')</span>
                                    <span class="pull-left">10 </span><span class="pull-left">@lang('lang.of')</span><span class="pull-left">57</span><span class="pull-left">@lang('lang.Lessons')</span>
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
