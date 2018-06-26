@extends('layout.app')
@section('title', 'Groups')
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
                                <a class="btn btn-primary waves-effect float-right" onclick="showpopup();" id="popup_addgroup" >@lang('lang.Add_Group')</a>
                                
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th class="sorting_asc">@lang('lang.Group_Name')</th>
                                <th>@lang('lang.Teacher')</th>
                                <th>@lang('lang.Number_of_students')</th>
                                <th>@lang('lang.Action')</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              
                                @foreach ($groups as $group)
                                <tr>
                                    <td>10</td>
                                    <td>{{$group->title_en}}</td>
                                    <td>{{$group->fullname}}</td>
                                    <td>20</td> 
                                    <td class="action">
                                    <a  id="edit_group" data-id="{{$group->group_id}}"><i class="material-icons" title="@lang('lang.Edit')">edit</i></a>
                                    <a class="jq_delete_user"  data-id="{{$group->group_id}}" data-action="{{url('/')."/".Lang::getLocale()}}/groups/{{$group->group_id}}/delete"><i class="material-icons" title="@lang('lang.Delete')">delete</i></a>
                                    <a onclick="showpopup();" class="btn-send-message-groups" title="@lang('lang.Send_Message')"><i class="material-icons">send</i></a><a href="{{url('/')."/".Lang::getLocale()}}/students" class="btn-show-Groups" title="@lang('lang.show_students')"><i class="flaticon-school fi"></i></a></td>
                                </tr>                
                                @endforeach

                              
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" >
                                    <span class="pull-left">@lang('lang.Showing')</span><span class="pull-left">1 </span> <span class="pull-left">@lang('lang.to')</span>
                                    <span class="pull-left">10 </span><span class="pull-left">@lang('lang.of')</span><span class="pull-left">57</span><span class="pull-left">@lang('lang.Students')</span>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                        {{$groups->links()}}
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
