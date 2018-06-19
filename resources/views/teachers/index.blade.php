@extends('layout.app')
@section('title', 'Teacher')

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
                                <div class="col-sm-8 float-left">
                                    <div class="dataTables_filter pull-left">
                                        <label>@lang('lang.Search')</label>
                                        <input type="search" class="form-control input-sm" placeholder="@lang('lang.Search')" aria-controls="DataTables_Table_0">
                                    </div>
                                </div>
                                <div class="col-sm-4 float-right">
                                    <a class="btn btn-primary waves-effect float-right" onclick="showpopup();">@lang('lang.Add_Teacher')</a>
                                </div>
                            </div>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="sorting_asc">@lang('lang.Name')</th>
                                    <th>@lang('lang.Email')</th>
                                    <th>@lang('lang.Phone')</th>
                                    <th>@lang('lang.Home_room_level')</th>
                                    <th>@lang('lang.Home_room_class')</th>
                                    <th class="sorting_desc">@lang('lang.Created_date')</th>
                                    <th>@lang('lang.Action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td><img src="/images/user.png" alt="User Avatar" class="img-circle avatar-table" width="400"><span class="name">oday</span> </td>
                                    <td>oday@manhal</td>
                                    <td>0786870058</td>
                                    <td>Home room level</td>
                                    <td>Home room class</td>
                                    <td>2011/04/25</td>
                                    <td class="action"><a title="@lang('lang.Edit')"><i class="material-icons">edit</i></a> <a title="@lang('lang.Delete')"><i class="material-icons">delete</i></a></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td><img src="/images/user.png" alt="User Avatar" class="img-circle avatar-table" width="400"><span class="name">oday</span> </td>
                                    <td>oday@manhal</td>
                                    <td>0786870058</td>
                                    <td>Home room level</td>
                                    <td>Home room class</td>
                                    <td>2011/04/25</td>
                                    <td class="action"><a title="@lang('lang.Edit')"><i class="material-icons">edit</i></a> <a title="@lang('lang.Delete')"><i class="material-icons">delete</i></a></td>
                                </tr>
                            </tbody>
                        </table>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="dataTables_info" >
                                        <span class="pull-left">@lang('lang.Showing') </span><span class="pull-left">1 </span> <span class="pull-left">@lang('lang.to') </span>
                                        <span class="pull-left">10 </span><span class="pull-left">@lang('lang.of')</span><span class="pull-left">57</span><span class="pull-left">@lang('lang.Teachers')</span>
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
