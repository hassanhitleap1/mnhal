<div class="row clearfix">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Name_Ar')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Name_Ar')"/>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Name_En')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Name_En')"/>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Description_Ar')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Description_Ar')"/>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Description_En')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Description_En')"/>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="float-left">@lang('lang.Category')</label>
            <div class="form-line float-left">
                <select class="form-control show-tick">
                    <option value="Arabic">Arabic</option>
                    <option value="English">English</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Points')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Points')"/>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a class="btn btn-primary waves-effect btn-saveeaddcategory" onclick="hidepopup();">@lang('lang.Save')</a>
    </div>
</div>
