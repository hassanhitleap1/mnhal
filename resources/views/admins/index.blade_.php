@extends('layout.app')
@section('title', 'Admins')

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
                                <div class="col-sm-4 float-left">
                                    <div class="dataTables_filter pull-left">
                                        <label>@lang('lang.Search')</label>
                                        <input type="search" class="form-control input-sm" placeholder="@lang('lang.Search')" aria-controls="DataTables_Table_0">
                                    </div>
                                </div>
                                <div class="col-sm-3 float-left">
                                    <div class="form-group filter-big-width">
                                        <label class="float-left">filter</label>
                                        <div class="form-line float-left">
                                            <select class="form-control show-tick">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 float-right">
                                    <a class="btn btn-primary waves-effect float-right" onclick="showpopup();">@lang('lang.Add_Admin')</a>
                                </div>
                            </div>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th class="sorting_asc">@lang('Name')</th>
                                <th>@lang('Email')</th>
                                <th>@lang('Phone')</th>
                                <th class="sorting_desc">@lang('Created_date')</th>
                                <th>@lang('Action')</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>10</td>
                                <td><img src="/images/user.png" alt="User Avatar" class="img-circle avatar-table" width="400"><span class="name">oday</span> </td>
                                <td>oday@manhal</td>
                                <td>0786870058</td>
                                <td>2011/04/25</td>
                                <td class="action"><a><i class="material-icons">edit</i></a> <a><i class="material-icons">delete</i></a></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td><img src="/images/user.png" alt="Admin avatar" class="img-circle avatar-table pull-left" width="400"><span class="pull-left">oday</span> </td>
                                <td>oday@manhal</td>
                                <td>0786870058</td>
                                <td>2011/04/25</td>
                                <td class="action"><a><i class="material-icons">edit</i></a> <a><i class="material-icons">delete</i></a></td>
                            </tr>
                            </tbody>
                        </table>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="dataTables_info" >
                                        <span class="pull-left">@lang('lang.Showing') </span><span class="pull-left">1 </span> <span class="pull-left">@lang('lang.to') </span>
                                        <span class="pull-left">10 </span><span class="pull-left">@lang('lang.of')</span><span class="pull-left">57</span><span class="pull-left">@lang('lang.Admins')</span>
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
