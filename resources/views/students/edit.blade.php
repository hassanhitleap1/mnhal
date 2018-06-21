<form id="edit-form" action="{{URL::to('/').'/'.Lang::getLocale().'/students/'.$student[0]->userid.'/update'}}" enctype="multipart/form-data" method="POST">
<div class="row clearfix">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Username')</label>
                <input type="text" class="form-control jq_formdata" placeholder="@lang('lang.Name')" name="uname" value="{{$student[0]->uname}}" />
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Fullname')</label>
                <input type="text" class="form-control jq_formdata" placeholder="@lang('lang.Fullname')" name="fullname" value="{{$student[0]->fullname}}" />
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Email')</label>
                <input type="text" class="form-control jq_formdata" placeholder="@lang('lang.Email')" name="email" value="{{$student[0]->email}}" />
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Phone')</label>
                <input type="text" class="form-control jq_formdata" placeholder="@lang('lang.Phone')" name="phone" value="{{$student[0]->phone}}" />
            </div>
        </div>
    </div>

    <div class="col-sm-6 float-left">
        <div class="form-group">
            <label class="float-left">@lang('lang.Home_room_level')</label>
            <div class="form-line float-left">
                <select class="form-control show-tick jq_formdata" name="home_room_level"id="home_room_level">
                    <option value="-1">-----</option>
                    <?php
                    $Levels=[];
                        $class_options='';
                    ?>
                    @foreach($classes as $class)
                        @if(array_search($class->level,$Levels)===false)
                            <option <?php if($class->level==$student[0]->level){echo 'selected="selected"';}?> data-id="{{$class->level}}">{{$class->{"ltitle_".Lang::getLocale()} }}</option>
                               <?php
                                    $Levels[]=$class->level;
                                ?>
                        @endif

                            <?php
                                if($class->level==$student[0]->level){
                                    $style='';
                                }else{
                                    $style='style="display:none"';
                                }

                                if($class->class_id==$student[0]->class){
                                    $selected='selected="selected" ';
                                }else{
                                    $selected=' ';
                                }

                            $class_options.='<option level-id="'.$class->level.'" data-id="'.$class->class_id.'"  '.$selected.$style.' >'.$class->{"ctitle_".Lang::getLocale()}.'</option>';
                            ?>

                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="col-sm-6 float-left">
        <div class="form-group">
            <label class="float-left">@lang('lang.Home_room_class')</label>
            <div class="form-line float-left">
                <select class="form-control show-tick jq_formdata" name="home_room_class" id="home_room_class">
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
                <input type="text" class="datepicker form-control jq_formdata" placeholder="@lang('lang.Birth_of_Date')" name="birthdate" data-dtp="dtp_ZYZzi"  value="{{$student[0]->birthdate}}" >
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
        <button class="btn btn-primary waves-effect" type="button"  id="update_student" student-id="{{$student[0]->userid}}">@lang('lang.Update')</button>
    </div>

</div>
    <input type="hidden" class="jq_formdata" name="_token" value="{{ csrf_token() }}">
</form>