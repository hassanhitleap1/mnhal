@extends('layout.app')
@section('title', 'Category')
@section('content')
    <script type="text/javascript">
        var url = "{{url('en/category')}}";
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
                               {!! Form::open(array('id'=>'Category', 'method'=>'GET', 'url'=>$lang.'/category' )) !!}
                               <div class="dataTables_filter pull-left">
                                   <label>@lang('lang.Search')</label>
                                   <input type="search" class="form-control input-sm CategoryKeywords" placeholder="@lang('lang.Search')" value="@if(!empty($search)){{$search}}@endif" aria-controls="DataTables_Table_0">
                                   @if(!empty($search))
                                   {!! Form::hidden('search',$search) !!}
                                   @endif
                                   {!! Form::close() !!}
                               </div>
                           </div>
                           <div class="col-sm-4 float-right">
                               <a class="btn btn-primary waves-effect float-right btn-addcategory"
                                  onclick="showpopup();">@lang('lang.Add_Category')</a>
                               <a class="btn btn-primary waves-effect float-right btn-sortcategory"
                                  onclick="showpopup();">@lang('lang.Category_Sort')</a>
                           </div>
                       </div>
                       <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                           <thead>
                           <tr>
                               <th>#</th>
                               <th class="@if(!empty($descask) && $descask=='ASC' && !empty($orderBy) && $orderBy=='title_ar'){{'sorting_asc'}}@else sorting_desc @endif  CategorySortingName_Ar">@lang('lang.Name_Ar')</th>
                               <th class="@if(!empty($descask) && $descask=='ASC' && !empty($orderBy) && $orderBy=='title_en'){{'sorting_asc'}}@else sorting_desc @endif  CategorySortingName_En">@lang('lang.Name_En')</th>
                               <th class="@if(!empty($descask) && $descask=='ASC' && !empty($orderBy) && $orderBy=='order'){{'sorting_asc'}}@else sorting_desc @endif CategorySortingName_order">@lang('lang.Sorting')</th>
                               <th class="@if(!empty($descask) && $descask=='ASC' && !empty($orderBy) && $orderBy=='updated_at'){{'sorting_asc'}}@else sorting_desc @endif CategorySortingName_Date">@lang('lang.Created_date')</th>
                               <th>@lang('lang.Action')</th>
                           </tr>
                           </thead>
                           <tbody class="tbody">
                           @if(count($category)>0)
                               @foreach($category as $key=>$cat)
                                   <tr>
                                       <td>{{$key}}</td>
                                       <td><span class="name">{{$cat->title_ar}}</span></td>
                                       <td><span class="name">{{$cat->title_en}}</span></td>
                                       <td>{{$cat->order}}</td>
                                       <td>{{$cat->updated_at}}</td>
                                       <td class="action">
                                       <td class="action">

                                           <a class="btn-editcategory" att="{{$cat->category_id}}" onclick="showpopup();" title="@lang('lang.Edit')"><i class="material-icons">edit</i></a>
                                           <a class="btn-deletecategory" att="{{$cat->category_id}}" title="@lang('lang.Delete')"> <i class="material-icons">delete</i></a>
                                       </td>

                                   </tr>
                               @endforeach
                           @endif
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
   </div>

@endsection
