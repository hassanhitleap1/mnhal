@section('title', 'Add')
<form id="edit-form" action="{{URL::to('/').'/'.Lang::getLocale().'/classes/save'}}"  method="POST">
    <div class="row clearfix">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-line">
                    <label>@lang('lang.Name_Ar')</label>
                    <input type="text" class="form-control" placeholder="@lang('lang.Name_Ar')" name="name_en" />
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-line">
                    <label>@lang('lang.Name_En')</label>
                    <input type="text" class="form-control" placeholder="@lang('lang.Name_En')" name="name_ar"/>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-line">
                    <label>@lang('lang.Level')</label>
                    <div class="form-line float-left">
                        <select class="form-control show-tick jq_formdata" name="level"id="level">
                            <option value="" disabled selected hidden>Please Choose...</option>
                                    @foreach($levels as $level)
                                        <option value="{{$level->level_id}}"> {{$level->ltitle_en}}</option>
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
                        <option value="" disabled selected hidden>Please Choose...</option>
                                @foreach($teachers as $teacher)
                                    <option value="{{$teacher->userid}}"> {{$teacher->fullname}}</option>
                                @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <input type="hidden" class="jq_formdata" name="_token" value="{{ csrf_token() }}">
             <button class="btn btn-primary waves-effect btn-saveclasses" type="button"  id="update_class" >@lang('lang.Save')</button>
        </div>
    </div>
    
</form>