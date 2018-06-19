@extends('layout.app')
@section('title',__('lang.School_schedule'))
@section('content')
    <script type="text/javascript">
        var url = "{{url('en/schedule')}}";
        var _token = "{{ csrf_token() }}";
        var lang="{{Lang::getLocale()}}";
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
                                <div class="col-sm-4 float-left">
                                    <form class="form-horizontal">
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label class="float-left">@lang('lang.Class')</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line float-left">
                                                        <select class="form-control show-tick">
                                                            @if(count($allclass)>0)
                                                                @foreach($allclass as $key=>$level)
                                                                <option value="1">{{$level->ltitle_ar}}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-4 float-left">
                                    <form class="form-horizontal">
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label class="float-left">Division</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line float-left">
                                                        <select class="form-control show-tick">
                                                            @if(count($section)>0)
                                                                @foreach($section as $key=>$seca)
                                                                    <option value="{{$seca->class_id}}">{{$seca->ctitle_ar}}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-4 float-left">
                                <form class="form-horizontal">
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label class="float-left">@lang('lang.Teacher')</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line float-left">
                                                    <select class="form-control show-tick">
                                                        @if(count($teacher)>0)
                                                            @foreach($teacher as $key=>$teac)
                                                                <option  value="{{$teac->userid}}">{{$teac->fullname}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="limiter">
                                <div class="container-table100">
                                    <div class="wrap-table100">
                                        <div class="table100 ver1">
                                            <table data-vertable="ver1" class="table table-bordered table-striped table-hover dataTable"
                                                   id="table_schedule">
                                                <thead>
                                                <tr class="row100 head">
                                                    <th class="text-center column100 column1" data-column="column1"></th>

                                                    <th  class="text-center column100 column2" data-column="column2">@lang('lang.Saturday')</th>
                                                    <th class="text-center column100 column3" data-column="column3">@lang('lang.Sunday')</th>
                                                    <th class="text-center column100 column4" data-column="column4">@lang('lang.Monday')</th>
                                                    <th class="text-center column100 column5" data-column="column5">@lang('lang.Tuesday')</th>
                                                    <th class="text-center column100 column6" data-column="column6">@lang('lang.Wednesday')</th>
                                                    <th class="text-center column100 column7" data-column="column7">@lang('lang.Thursday')</th>
                                                    <th class="text-center column100 column8" data-column="column8">@lang('lang.Friday')</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @for($j=0;$j<8;$j++)
                                                <tr class="row100">
                                                    <td class="text-center column100 column1" data-column="column1">
                                                        <div> @lang('lang.Period')  {!! $j+1 !!}</div>
                                                    </td>
                                                    @for($i=2;$i<9;$i++)
                                                    <td class="column100 column{!! $i !!}" data-column="column{!! $i !!}">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="form-line float-left">
                                                                    <select class="form-control show-tick">
                                                                        @if(count($categories)>0)
                                                                            <option  value="-1">empty</option>
                                                                            @foreach($categories as $key=>$cate)
                                                                                <option  value="{{$cate->category_id}}">{{$cate->title_ar}}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                    <select class="form-control show-tick">
                                                                        @if(count($teacher)>0)
                                                                            <option  value="-1">empty</option>
                                                                            @foreach($teacher as $key=>$teac)
                                                                                <option  value="{{$teac->userid}}">{{$teac->fullname}}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                   @endfor
                                                @endfor
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-sm-4 float-right">
                                   <a class="btn btn-primary waves-effect float-right btn-saveschedule">@lang('lang.Save')</a>
                                   <a class="btn btn-primary waves-effect float-right btn-print-schdule" id="btn-print-schdule">@lang('lang.Print')</a>
                               </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
