@section('title', 'eddit')
<form id="edit-form" action="{{URL::to('/').'/'.Lang::getLocale().'/groups/update'}}"  method="POST">
    <div class="row clearfix">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-line">
                    <label>@lang('lang.Group_Name')</label>
                    <input type="text" class="form-control" placeholder="@lang('lang.Group_Name')" name="gname" value="{{$group->title_en}}"/>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-line">
                    <label>@lang('lang.Description')</label>
                    <input type="text" class="form-control" placeholder="@lang('lang.Description')" name="gdesc"value="{{$group->description_en}}" />
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-line">
                    <label>@lang('lang.Teacher')</label>
                    <select class="form-control show-tick jq_formdata" name="teacher"id="teacher">
                            @foreach($teachers as $teacher)
                                @if($teacher->userid == $teacher->userid)
                                    <option value="{{$teacher->userid}}" selected> {{$teacher->fullname}}</option>
                                @else
                                    <option value="{{$teacher->userid}}"> {{$teacher->fullname}}</option>
                                @endif
                            @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button class="btn btn-primary waves-effect btn-saveeaddcategoryt" type="button"  id="update_group" group-id="">@lang('lang.Save')</button>
    </div>
    <input type="hidden" class="jq_formdata" name="id" value="{{ $group->group_id }}">
    <input type="hidden" class="jq_formdata" name="_token" value="{{ csrf_token() }}">
</form>