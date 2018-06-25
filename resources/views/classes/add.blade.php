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
                <label>@lang('lang.Number_of_students')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Number_of_students')"/>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="float-left">@lang('lang.Home_Room_Teacher')</label>
            <div class="form-line float-left">
                <select class="form-control show-tick">
                    <option value="oday">oday</option>
                    <option value="khalid">khalid</option>
                    <option value="Hussam">Hussam</option>
                </select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a class="btn btn-primary waves-effect btn-saveclasses" onclick="hidepopup();">@lang('lang.Save')</a>
    </div>
</div>
