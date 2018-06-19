@section('title', 'Add')

@php $lang=Lang::getLocale();@endphp
{{App::setLocale($lang)}}
<div class="row clearfix">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Level_Ar')</label>
                <input id="title_ar" type="text" class="form-control" placeholder="@lang('lang.Name_Ar')"/>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Level_Ar')</label>
                <input id="title_en" type="text" class="form-control" placeholder="@lang('lang.Name_En')"/>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a class="btn btn-primary waves-effect btn-saveeaddlevels"  onclick="hidepopup();">Save</a>
    </div>
</div>