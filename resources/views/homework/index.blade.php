@extends('layout.app')
@section('title', __('lang.Homework'))
@section('content')
    <script type="text/javascript">
        var url = "{{url('en/levels')}}";
        var _token = "{{ csrf_token() }}";
    </script>
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
                                    <input type="search" class="form-control input-sm keywords" placeholder="@lang('lang.Search')" value="@lang('lang.Search')" aria-controls="DataTables_Table_0">
                                </div>
                            </div>
                            <div class="col-sm-4 float-right">
                                <a class="btn btn-primary waves-effect float-right btn-addhomework"
                                   onclick="showpopup();">@lang('lang.Add_Homework')</a>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('lang.Title')</th>
                                <th class="sorting_asc">@lang('lang.Start_Date')</th>
                                <th>@lang('lang.End_Date')</th>
                                <th>@lang('lang.Student_participation')</th>
                                <th>@lang('lang.Action')</th>
                            </tr>
                            </thead>
                            <tbody class="tbody">
                                    <tr>
                                        <td>1</td>
                                        <td><span class="name">Title</span></td>
                                        <td><span class="name">Start Date</span></td>
                                        <td>End Date</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                                    40%
                                                </div>
                                            </div>
                                        </td>
                                        <td class="action">
                                            <a class="btn-editlevels" onclick="showpopup();" title="@lang('lang.Edit')"><i class="material-icons">edit</i></a>
                                            <a class="btn-deletelevels" title="@lang('lang.Delete')"> <i class="material-icons">delete</i></a>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info">
                                    <span class="pull-left">@lang('lang.Showing')</span><span class="pull-left">1 </span>
                                    <span class="pull-left">@lang('lang.to') </span>
                                    <span class="pull-left">2 </span><span class="pull-left">@lang('lang.of')</span><span class="pull-left">4</span><span class="pull-left">@lang('lang.Homeworks')</span>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    {{--{{$admins->links()}}--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
