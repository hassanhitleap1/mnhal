<div class="row clearfix">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Title_Ar')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Title_Ar')"/>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Title_En')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Title_En')"/>
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
            <label class="float-left">@lang('lang.Teacher')</label>
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
                <label>@lang('lang.Start_Date')</label>
                <input type="text" class="datepicker form-control jq_formdata" placeholder="@lang('lang.Start_Date')" name="birthdate" data-dtp="dtp_ZYZzi"  value="" >
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.End_Date')</label>
                <input type="text" class="datepicker form-control jq_formdata" placeholder="@lang('lang.End_Date')" name="birthdate" data-dtp="dtp_ZYZzi"  value="" >
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Min_Point')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Min_Point')"/>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Max_Point')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Max_Point')"/>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a class="btn btn-primary waves-effect btn-save" onclick="hidepopup();">@lang('lang.Save')</a>
    </div>
</div>
