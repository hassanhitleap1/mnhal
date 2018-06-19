<div class="row clearfix">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Username')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Name')" value="{{$admin[0]->uname}}" />
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Fullname')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Fullname')" value="{{$admin[0]->fullname}}" />
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Email')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Email')" value="{{$admin[0]->email}}" />
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Phone')</label>
                <input type="text" class="form-control" placeholder="@lang('lang.Phone')"  value="{{$admin[0]->phone}}" />
            </div>
        </div>
    </div>

    <div class="col-sm-6 float-left">
        <div class="form-group">
            <label class="float-left">@lang('lang.Home_room_level')</label>
            <div class="form-line float-left">
                <select class="form-control show-tick" name="home_roome_level" id="home_roome_level">
                    <option value="-1">-----</option>
                    <?php
                    $Levels=[];
                        $class_options='';
                    ?>
                    @foreach($classes as $class)
                        @if(array_search($class->level,$Levels)===false)
                            <option <?php if($class->level==$admin[0]->level){echo 'selected="selected"';}?> data-id="{{$class->level}}">{{$class->{"ltitle_".Lang::getLocale()} }}</option>
                               <?php
                                    $Levels[]=$class->level;
                                ?>
                        @endif

                            <?php
                                if($class->level==$admin[0]->level){
                                    $style='';
                                }else{
                                    $style='style="display:none"';
                                }

                                if($class->class_id==$admin[0]->class){
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
                <select class="form-control show-tick" name="home_roome_class" id="home_roome_class">
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
                <input type="text" class="datepicker form-control" placeholder="@lang('lang.Birth_of_Date')" data-dtp="dtp_ZYZzi"  value="{{$admin[0]->birthdate}}" >
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <label>@lang('lang.Upload_avatar')</label>
                <label class="input-group-btn">
                    <span class="btn btn-primary"> @lang('lang.Browse')<input type="file" style="display: none;"></span>
                </label>
                <input type="text" class="form-control" style="display: none" readonly="">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a class="btn btn-primary waves-effect btn-saveeditcategory" att="{{$admin[0]->userid}}" onclick="hidepopup();">Save</a>
    </div>

</div>
