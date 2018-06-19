@extends('layout.app')
@section('title', 'Levels')
@section('content')
    <script type="text/javascript">
        var url = "{{url('en/levels')}}";
        var _token = "{{ csrf_token() }}";
        var lang="{{Lang::getLocale()}}";
    </script>
    <div class="block-header">
        <h2>@yield('title')</h2>
    </div>
    @php $lang=Lang::getLocale();@endphp
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body table-responsive">
                    <div class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-8 float-left">
                                <div class="dataTables_filter pull-left">
                                    <label>@lang('lang.Search')</label>
                                    {!! Form::open(array('id'=>'Levels', 'method'=>'GET', 'url'=>$lang.'/levels' )) !!}
                                    <input type="search" class="form-control input-sm LevelKeywords" placeholder="@lang('lang.Search')" value="@if(!empty($search)){{$search}}@endif" aria-controls="DataTables_Table_0">
                                    @if(!empty($search))
                                        {!! Form::hidden('search',$search) !!}
                                    @endif
                                    {!! Form::close() !!}

                                </div>
                            </div>
                            <div class="col-sm-4 float-right">
                                <a class="btn btn-primary waves-effect float-right btn-addlevel"
                                   onclick="showpopup();">@lang('lang.Add_level')</a>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>#</th>

                                <th class="@if(!empty($descask) && $descask=='ASC' && !empty($orderBy) && $orderBy=='ltitle_ar'){{'sorting_asc'}}@else sorting_desc @endif  LevelSortingName_Ar">@lang('lang.Name_Ar')</th>
                                <th class="@if(!empty($descask) && $descask=='ASC' && !empty($orderBy) && $orderBy=='ltitle_en'){{'sorting_asc'}}@else sorting_desc @endif  LevelSortingName_En">@lang('lang.Name_En')</th>
                                <th class="@if(!empty($descask) && $descask=='ASC' && !empty($orderBy) && $orderBy=='level_number'){{'sorting_asc'}}@else sorting_desc @endif LevelSortingName_order">@lang('lang.Sorting')</th>
                                <th class="@if(!empty($descask) && $descask=='ASC' && !empty($orderBy) && $orderBy=='updated_at'){{'sorting_asc'}}@else sorting_desc @endif LevelSortingName_Date">@lang('lang.Created_date')</th>
                                <th>@lang('lang.Action')</th>
                            </tr>
                            </thead>
                            <tbody class="tbody">
                            @if(count($levels)>0)
                                @foreach($levels as $key=>$levl)
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td><span class="name">{{$levl->ltitle_ar}}</span></td>
                                        <td><span class="name">{{$levl->ltitle_en}}</span></td>
                                        <td>{{$levl->level_number}}</td>
                                        <td>{{$levl->updated_at}}</td>
                                        <td class="action">
                                        <td class="action">
                                            <a class="btn-editlevels" att="{{$levl->level_id}}" onclick="showpopup();" title="@lang('lang.Edit')"><i class="material-icons">edit</i></a>
                                            <a class="btn-deletelevels" att="{{$levl->level_id}}" title="@lang('lang.Delete')"> <i class="material-icons">delete</i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info">
                                    <span class="pull-left">@lang('lang.Showing')</span><span class="pull-left">{{($levels->currentpage()-1)*$levels->perpage()+1}}</span>
                                    <span class="pull-left">@lang('lang.to') </span>
                                    <span class="pull-left">{{(($levels->currentpage()-1)*$levels->perpage())+$levels->count()}} </span><span class="pull-left">@lang('lang.of')</span><span class="pull-left">{{$levels->total()}}</span><span class="pull-left">@lang('lang.Levels')</span>
                                </div>
                            </div>

                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    <?php
                                        $array=array('sorting'=>$orderBy,'descask'=>$descask);
                                    if(isset($search)&&$search!=''){
                                        $array['search']=$search;
                                    }
                                   ?>
                                    {{$levels->appends($array)->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
