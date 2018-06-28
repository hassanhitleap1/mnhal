<div class="row clearfix">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Title')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Title')"/>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="float-left">@lang('lang.Teacher')</label>
            <div class="form-line float-left">
                <select class="form-control show-tick">
                    <option value="oday">oday</option>
                    <option value="khalid">khalid</option>
                    <option value="Hussam">Hussam</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="float-left">@lang('lang.Category')</label>
            <div class="form-line float-left">
                <select class="form-control show-tick">
                    <option value="arabic">arabic</option>
                    <option value="english">english</option>
                    <option value="french">french</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="float-left">@lang('lang.Level')</label>
            <div class="form-line float-left">
                <select class="form-control show-tick">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a class="btn btn-primary waves-effect btn-save" onclick="hidepopup();">@lang('lang.Add')</a>
    </div>
</div>
