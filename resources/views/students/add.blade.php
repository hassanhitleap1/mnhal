@section('title', 'Add')
<form id="edit-form" action="{{URL::to('/').'/'.Lang::getLocale().'/students/save'}}" enctype="multipart/form-data" method="POST">
    <div class="row clearfix">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-line">
                    <label>@lang('lang.Username')</label>
                    <input type="text" class="form-control jq_formdata" placeholder="@lang('lang.Name')" name="uname" value="" />
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-line">
                    <label>@lang('lang.Fullname')</label>
                    <input type="text" class="form-control jq_formdata" placeholder="@lang('lang.Fullname')" name="fullname" value="" />
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-line">
                    <label>@lang('lang.Email')</label>
                    <input type="text" class="form-control jq_formdata" placeholder="@lang('lang.Email')" name="email" value="" />
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-line">
                    <label>@lang('lang.Phone')</label>
                    <input type="text" class="form-control jq_formdata" placeholder="@lang('lang.Phone')" name="phone" value="" />
                </div>
            </div>
        </div>

        <div class="col-sm-6 float-left">
            <div class="form-group">
                <label class="float-left">@lang('lang.Level')</label>
                <div class="form-line float-left">
                    <select class="form-control show-tick jq_formdata" name="level"id="level">
                        <option value="-1">-----</option>
                        <?php
                        $Levels=[];
                        $class_options='';
                        ?>
                        @foreach($classes as $class)
                            @if(array_search($class->level,$Levels)===false)
                                <option data-id="{{$class->level}}" value="{{$class->level}}">{{$class->{"ltitle_".Lang::getLocale()} }}</option>
                                <?php
                                $Levels[]=$class->level;
                                ?>
                            @endif

                            <?php
                            $class_options.='<option value='.$class->level .'  level-id="'.$class->level.'" data-id="'.$class->class_id.'">'.$class->{"ctitle_".Lang::getLocale()}.'</option>';
                            ?>

                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-sm-6 float-left">
            <div class="form-group">
                <label class="float-left">@lang('lang.Class')</label>
                <div class="form-line float-left">
                    <select class="form-control show-tick jq_formdata" name="class" id="class">
                        <option value="-1">-----</option>
                        <?=$class_options?>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-line">
                    <label>@lang('lang.Birth_of_Date')</label>
                    <input type="text" class="datepicker form-control jq_formdata" placeholder="@lang('lang.Birth_of_Date')" name="birthdate" data-dtp="dtp_ZYZzi"  value="" >
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-line">
                    <label>@lang('lang.Upload_avatar')</label>
                    <label class="input-group-btn">
                        <span class="btn btn-primary"> @lang('lang.Browse')<input type="file" class="jq_formdata" name="avatar" id="avatar" style="display: none;"></span>
                    </label>
                    <input type="text" class="form-control" style="display: none" readonly="">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary waves-effect" type="button"  id="update_student" admin-id="">@lang('lang.Save')</button>
        </div>

    </div>
    <input type="hidden" class="jq_formdata" name="_token" value="{{ csrf_token() }}">
</form>

