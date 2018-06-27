@section('title', 'Add')
<form id="edit-form" action="{{URL::to('/').'/'.Lang::getLocale().'/classes/'.$class->class_id.'/update'}}"  method="POST">
    <div class="row clearfix">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-line">
                    <label>@lang('lang.Name_Ar')</label>
                    <input type="text" class="form-control" placeholder="@lang('lang.Name_Ar')" name="name_en" value="{{$class->ctitle_en}}"/>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-line">
                    <label>@lang('lang.Name_En')</label>
                    <input type="text" class="form-control" placeholder="@lang('lang.Name_En')" name="name_ar" value="{{$class->ctitle_ar}}"/>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-line">
                    <label>@lang('lang.Level')</label>
                    <div class="form-line float-left">
                        <select class="form-control show-tick jq_formdata" name="level" >
                                @foreach($levels as $level)
                                    @if($level->level_id == $class->level)
                                        <option value="{{$level->level_id}}" selected> {{$level->ltitle_en}}</option>
                                    @else
                                        <option value="{{$level->level_id}}" selected> {{$level->ltitle_en}}</option>
                                    @endif    
                                 @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="float-left">@lang('lang.Home_Room_Teacher')</label>
                <div class="form-line float-left">
                    <select class="form-control show-tick jq_formdata" name="teacher"id="teacher">
                                @foreach($teachers as $teacher)
                                    @if($teacher->userid == $class->ref_id)   
                                        <option value="{{$teacher->userid}}" selected> {{$teacher->fullname}}</option>
                                    @else
                                        <option value="{{$teacher->userid}}"> {{$teacher->fullname}}</option>
                                    @endif 
                                @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <input type="hidden" class="jq_formdata" name="_token" value="{{ csrf_token() }}">
             <button class="btn btn-primary waves-effect btn-saveclasses" type="button"  id="update_class" class-id="{{$class->class_id}}">@lang('lang.Save')</button>
        </div>
    </div>
    
</form>