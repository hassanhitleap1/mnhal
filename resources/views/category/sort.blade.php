@section('title', 'Sort')
{{App::setLocale($lang)}}
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="body">
                <label>@lang('lang.Sorting')</label>
                <div class="clearfix m-b-20">
                    <div class="dd nestable-with-handle">
                        <ol id="sortable" class="dd-list">
                            @if(count($category)>0)
                                @foreach($category as $key=>$cat)
                                    <li class="dd-item dd3-item" data-id="{{$cat->category_id}}">
                                        <div class="dd-handle dd3-handle flaticon-import-export-arrows fi"></div>
                                        @if($lang=='ar')
                                            <div  class="dd3-content">{{$cat->title_ar}}</div>
                                            @else
                                            <div class="dd3-content">{{$cat->title_en}}</div>
                                            @endif
                                    </li>
                                @endforeach
                            @endif
                        </ol>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary waves-effect btn-savesortcategory"  onclick="hidepopup();">Save</a>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function(){
        $( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
    });

</script>
