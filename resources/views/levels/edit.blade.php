@section('title', 'Edit')
<form id="PopupWindow" >
<div class="row clearfix">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Name_Ar')</label>
                <input id="title_ar" type="text" value="{{$levels->ltitle_ar}}" class="form-control" placeholder="@lang('lang.Name_Ar')"/>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Name_En')</label>
                <input id="title_en" type="text" value="{{$levels->ltitle_en}}" class="form-control" placeholder="@lang('lang.Name_En')"/>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a class="btn btn-primary waves-effect btn-saveeditlevels" att="{{$levels->level_id}}" onclick="hidepopup();">Save</a>
    </div>
    </div>

</form>