@extends('layout.app')
@section('title', 'Student')
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
                            <form id="edit-form" action="{{URL::to('/').'/'.Lang::getLocale().'/students/filter'}}"  method="POST">
                                <div class="col-sm-3 float-left">
                                    <div class="form-horizontal">
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label class="float-left">@lang('lang.Search')</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line float-left">
                                                        <input type="search" class="form-control show-tick" placeholder="@lang('lang.Search')" aria-controls="DataTables_Table_0" id="search">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 float-left">
                                    <div class="form-horizontal">
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label class="float-left">Level</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line float-left">
                                                        <select class="form-control show-tick">
                                                             <option value="-1">-----</option>
                                                                <?php $Levels=[];$class_options=''; ?>
                                                                    @foreach($classes as $class)
                                                                        @if(array_search($class->level,$Levels)===false)
                                                                            <option data-id="{{$class->level}}" value="{{$class->level}}">{{$class->{"ltitle_".Lang::getLocale()} }}</option>
                                                                                <?php $Levels[]=$class->level;?>
                                                                        @endif
                                                                            <?php
                                                                            $class_options.='<option value='.$class->level .'  level-id="'.$class->level.'" data-id="'.$class->class_id.'">'.$class->{"ctitle_".Lang::getLocale()}.'</option>';
                                                                            ?>

                                                                    @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 float-left">
                                    <div class="form-horizontal">
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label class="float-left">@lang('lang.Class')</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line float-left">
                                                        <select class="form-control show-tick">
                                                            <option value="-1">-----</option>
                                                            <?=$class_options?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 float-left">
                                    <form class="form-horizontal">
                                        <div class="row clearfix">
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line float-left">
                                                        <input type="hidden" class="jq_formdata" name="_token" value="{{ csrf_token() }}">
                                                        <button class="btn btn-primary waves-effect  " type="button"  id="searchstudent" >@lang('lang.Search')</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </form>                                                      
                        </div>
                        <div class="row">
                            <div class="col-sm-4 float-right">
                                 <a class="btn btn-primary waves-effect float-right" onclick="showpopup();" id="popup_addstudent" >@lang('lang.Add_Student')</a>
                            </div>
                        </div>                 
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="sorting_asc">@lang('lang.Name')</th>
                                    <th>@lang('lang.Email')</th>
                                    <th>@lang('lang.Phone')</th>
                                    <th>@lang('lang.Birth_of_Date')</th>
                                    <th>@lang('lang.Level')</th>
                                    <th>@lang('lang.Class')</th>
                                    <th>@lang('lang.Average')</th>
                                    <th>@lang('lang.Action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                    <?php
                                        $i=1;
                                            if(is_file("storage/".$student->avatar)){
                                                $avatar=URL::to('/')."/storage/".$student->avatar;
                                            }else{
                                                $avatar="/images/user.png";
                                            }
                                    //$avatar=URL::to('/')."/storage/".$student->avatar;
                                    ?>
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td><img src="{{$avatar}}" alt="User Avatar" class="img-circle avatar-table" width="400"><span class="name">{{$student->uname}}</span></td>
                                            <td>{{$student->email}}</td>
                                            <td>{{$student->phone}}</td>
                                            <td>{{$student->created_at}}</td>
                                            <td>
                                            {{($student->level != -1)?$student->level:"null"}}
                                            </td>
                                            
                                            <td>
                                            {{($student->class != -1)?$student->class:"null"}}
                                            </td>
                                            <td>avg</td>
                                            <td class="action">
                                            <a class="" id="edit_student" data-id="{{$student->userid}}"><i class="material-icons" title="@lang('lang.Edit')">edit</i></a>
                                            <a class="jq_delete_user"  data-id="{{$student->userid}}" data-action="{{url('/')."/".Lang::getLocale()}}/students/{{$student->userid}}/delete"><i class="material-icons" title="@lang('lang.Delete')">delete</i></a>
                                            </td>
                                        </tr>
                                @endforeach
                            </tbody>
                        </table>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="dataTables_info" >
                                        <span class="pull-left">@lang('lang.Showing') </span><span class="pull-left">1 </span> <span class="pull-left">@lang('lang.to') </span>
                                        <span class="pull-left">10 </span><span class="pull-left">@lang('lang.of')</span><span class="pull-left">57</span><span class="pull-left">@lang('lang.Students')</span>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                        {{$students->links()}}
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
