@section('title', 'Add')
<div class="row clearfix">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Username')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Name')"/>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Email')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Email')"/>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Phone')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Phone')"/>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Birth_of_Date')</label>
                <input type="text" class="datepicker form-control" placeholder="@lang('lang.Birth_of_Date')"
                       data-dtp="dtp_ZYZzi">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>@lang('lang.Home_room_level')</label>
            <div class="form-line">
                <select class="form-control show-tick">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="float-left">@lang('lang.Home_room_class')</label>
            <div class="form-line float-left">
                <select class="form-control show-tick">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Upload_avatar')</label>
                <label class="input-group-btn">
                    <span class="btn btn-primary"> @lang('lang.Browse')<input type="file" style="display: none;" multiple=""></span>
                </label>
                <input type="text" class="form-control" style="display: none" readonly="">
            </div>
        </div>
    </div>
</div>
