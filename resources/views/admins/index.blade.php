@extends('layout.app')
@section('title', __('lang.Admins'))
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
                                <a class="btn btn-primary waves-effect float-right" id="popup_addadmin">@lang('lang.Add_Admin')</a>
                            </div>
                        </div>
                        @if(count($admins)>0)
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
                                <?php
                                    $i=$admins->currentpage()*$admins->perpage()-$admins->perpage();
                                ?>

                                <tbody>
                                @foreach($admins as $admin)
                                   <?php
                                        if(is_file("storage/".$admin->avatar)){
                                            $avatar=URL::to('/')."/storage/".$admin->avatar;
                                        }else{
                                            $avatar="/images/user.png";
                                        }
                                   //$avatar=URL::to('/')."/storage/".$admin->avatar;
                                   ?>

                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td><img src="{{$avatar}}" alt="User Avatar" class="img-circle avatar-table" width="400"><span class="name">{{$admin->uname}}</span></td>
                                        <td>{{$admin->email}}</td>
                                        <td>{{$admin->phone}}</td>
                                        <td>{{$admin->created_at}}</td>
                                        <td class="action"><a class="edit_user" data-id="{{$admin->userid}}"><i class="material-icons" title="@lang('lang.Edit')">edit</i></a>
                                            <a class="jq_delete_user"  data-id="{{$admin->userid}}" data-action="{{url('/')."/".Lang::getLocale()}}/admins/{{$admin->userid}}/delete"><i class="material-icons" title="@lang('lang.Delete')">delete</i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        @else

                        @endif
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" >
                                    <span class="pull-left">@lang('lang.Showing') </span><span class="pull-left">{{($admins->currentpage()-1)*$admins->perpage()+1}} </span> <span class="pull-left">@lang('lang.to') </span>
                                    <span class="pull-left">{{(($admins->currentpage()-1)*$admins->perpage())+$admins->count()}} </span><span class="pull-left">@lang('lang.of')</span><span class="pull-left">{{$admins->total()}}</span><span class="pull-left">@lang('lang.Admins')</span>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    {{$admins->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
