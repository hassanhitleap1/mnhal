@section('title', 'Add')
{{App::setLocale($lang)}}
<div class="row clearfix">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Category_ar')</label>
                <input id="title_ar" type="text" class="form-control" placeholder="@lang('lang.Name_Ar')"/>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Category_en')</label>
                <input id="title_en" type="text" class="form-control" placeholder="@lang('lang.Name_En')"/>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a class="btn btn-primary waves-effect btn-saveeaddcategory"  onclick="hidepopup();">Save</a>
    </div>
</div>