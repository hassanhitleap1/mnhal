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
                                    <a class="btn btn-primary waves-effect float-right" onclick="showpopup();" id="popup_addteacher">@lang('lang.Add_Teacher')</a>
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
                                @foreach($teachers as $teacher)
                                   <?php
                                    $i=1;
                                        if(is_file("storage/".$teacher->avatar)){
                                            $avatar=URL::to('/')."/storage/".$teacher->avatar;
                                        }else{
                                            $avatar="/images/user.png";
                                        }
                                   //$avatar=URL::to('/')."/storage/".$teacher->avatar;
                                   ?>
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td><img src="{{$avatar}}" alt="User Avatar" class="img-circle avatar-table" width="400"><span class="name">{{$teacher->uname}}</span></td>
                                        <td>{{$teacher->email}}</td>
                                        <td>{{$teacher->phone}}</td>
                                        <td>
                                        {{($teacher->level != -1)?$teacher->homeRoomLevel:"null"}}
                                        <!-- {{$teacher->homeRoomLevel}} -->
                                        </td>
                                        <td>
                                        {{($teacher->class != -1)?$teacher->class:"null"}}
                                        <!-- {{$teacher->homeRoomClass}} -->
                                        </td>
                                        <td>{{$teacher->created_at}}</td>
                                        <td class="action">
                                            <a class="" id="edit_teacher" data-id="{{$teacher->userid}}"><i class="material-icons" title="@lang('lang.Edit')">edit</i></a>
                                            <a class="jq_delete_user"  data-id="{{$teacher->userid}}" data-action="{{url('/')."/".Lang::getLocale()}}/teachers/{{$teacher->userid}}/delete"><i class="material-icons" title="@lang('lang.Delete')">delete</i></a>
                                            <a  data-id="{{$teacher->userid}}" href="{{url('/')."/".Lang::getLocale()}}/classes/{{$teacher->userid}}"><i class="material-icons" title="@lang('lang.Classes')">classes</i></a>
                                            <a  data-id="{{$teacher->userid}}" href="{{url('/')."/".Lang::getLocale()}}/group/{{$teacher->userid}}"><i class="material-icons" title="@lang('lang.Group')">group</i></a>
                                            </td>
                                    </tr>
                                @endforeach
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
                                    {{$teachers->links()}}
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
