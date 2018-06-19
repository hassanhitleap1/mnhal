@section('title', 'Add')
        <div class="row clearfix default">
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="form-line">
                        <label>@lang('lang.Title')</label>
                        <input id="title_ar" type="text" class="form-control" placeholder="@lang('lang.Title')"/>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="form-line">
                        <label>@lang('lang.Description')</label>
                        <input id="title_en" type="text" class="form-control" placeholder="@lang('lang.Description')"/>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="form-line">
                        <label>@lang('lang.Start_Date')</label>
                        <input type="text" class="datepicker form-control" placeholder="@lang('lang.Start_Date')" data-dtp="dtp_ZYZzi"  value="" >
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="form-line">
                        <label>@lang('lang.End_Date')</label>
                        <input type="text" class="datepicker form-control" placeholder="@lang('lang.End_Date')" data-dtp="dtp_ZYZzi"  value="" >
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="form-line">
                        <label>@lang('lang.Mark')</label>
                        <input id="title_en" type="text" class="form-control" placeholder="@lang('lang.Mark')"/>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="float-left">@lang('lang.Class')</label>
                    <div class="form-line float-left">
                        <select class="form-control show-tick">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="form-group">
                    <label class="float-left">@lang('lang.Level')</label>
                    <div class="form-line float-left">
                        <select class="form-control show-tick">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="float-left">@lang('lang.Group')</label>
                    <div class="form-line float-left">
                        <select class="form-control show-tick">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer col-sm-12" >
                <a class="btn btn-primary waves-effect btn-addMedia">@lang("lang.Add_Media")</a>
                <a class="btn btn-primary waves-effect btn-saveeaddlevels"  onclick="hidepopup();">@lang("lang.Save")</a>
            </div>
        </div>
<div class="row clearfix add-media-div" style="display: none">
    <div class="row dataTables_wrapper">
        <div class="col-sm-4 float-left">
            <form class="form-horizontal">
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>@lang('lang.Search')</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line float-left">
                                <input type="search" class="form-control input-sm"
                                       placeholder="@lang('lang.Search')" aria-controls="DataTables_Table_0">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-4 float-left">
            <form class="form-horizontal">
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label class="float-left">@lang('lang.Subject')</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line float-left">
                                <select class="form-control show-tick">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-4 float-left">
            <form class="form-horizontal">
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label class="float-left">@lang('lang.Teacher')</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line float-left">
                                <select class="form-control show-tick">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row m-t-20">
        <div class="col-sm-2 col-md-2">
            <div class="thumbnail">
                <img src="http://placehold.it/500x300">
                <div class="caption">
                    <h3>Title</h3>
                    <p>
                        Description Descri ption Descrip tion Descr iption Descrip tion Descr iption Descrip tion Descr iption Des cription
                    </p>
                    <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">@lang("lang.Add_Homework")</a>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-2">
            <div class="thumbnail">
                <img src="http://placehold.it/500x300">
                <div class="caption">
                    <h3>Title</h3>
                    <p>
                        Description Descri ption Descrip tion Descr iption Descrip tion Descr iption Descrip tion Descr iption Des cription
                    </p>
                    <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">@lang("lang.Add_Homework")</a>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-2">
            <div class="thumbnail">
                <img src="http://placehold.it/500x300">
                <div class="caption">
                    <h3>Title</h3>
                    <p>
                        Description Descri ption Descrip tion Descr iption Descrip tion Descr iption Descrip tion Descr iption Des cription
                    </p>
                    <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">@lang("lang.Add_Homework")</a>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-2">
            <div class="thumbnail">
                <img src="http://placehold.it/500x300">
                <div class="caption">
                    <h3>Title</h3>
                    <p>
                        Description Descri ption Descrip tion Descr iption Descrip tion Descr iption Descrip tion Descr iption Des cription
                    </p>
                    <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">@lang("lang.Add_Homework")</a>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-2">
            <div class="thumbnail">
                <img src="http://placehold.it/500x300">
                <div class="caption">
                    <h3>Title</h3>
                    <p>
                        Description Descri ption Descrip tion Descr iption Descrip tion Descr iption Descrip tion Descr iption Des cription
                    </p>
                    <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">@lang("lang.Add_Homework")</a>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-2">
            <div class="thumbnail">
                <img src="http://placehold.it/500x300">
                <div class="caption">
                    <h3>Title</h3>
                    <p>
                        Description Descri ption Descrip tion Descr iption Descrip tion Descr iption Descrip tion Descr iption Des cription
                    </p>
                    <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">@lang("lang.Add_Homework")</a>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-2">
            <div class="thumbnail">
                <img src="http://placehold.it/500x300">
                <div class="caption">
                    <h3>Title</h3>
                    <p>
                        Description Descri ption Descrip tion Descr iption Descrip tion Descr iption Descrip tion Descr iption Des cription
                    </p>
                    <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">@lang("lang.Add_Homework")</a>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-2">
            <div class="thumbnail">
                <img src="http://placehold.it/500x300">
                <div class="caption">
                    <h3>Title</h3>
                    <p>
                        Description Descri ption Descrip tion Descr iption Descrip tion Descr iption Descrip tion Descr iption Des cription
                    </p>
                    <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">@lang("lang.Add_Homework")</a>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-2">
            <div class="thumbnail">
                <img src="http://placehold.it/500x300">
                <div class="caption">
                    <h3>Title</h3>
                    <p>
                        Description Descri ption Descrip tion Descr iption Descrip tion Descr iption Descrip tion Descr iption Des cription
                    </p>
                    <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">@lang("lang.Add_Homework")</a>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-2">
            <div class="thumbnail">
                <img src="http://placehold.it/500x300">
                <div class="caption">
                    <h3>Title</h3>
                    <p>
                        Description Descri ption Descrip tion Descr iption Descrip tion Descr iption Descrip tion Descr iption Des cription
                    </p>
                    <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">@lang("lang.Add_Homework")</a>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-2">
            <div class="thumbnail">
                <img src="http://placehold.it/500x300">
                <div class="caption">
                    <h3>Title</h3>
                    <p>
                        Description Descri ption Descrip tion Descr iption Descrip tion Descr iption Descrip tion Descr iption Des cription
                    </p>
                    <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">@lang("lang.Add_Homework")</a>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-2">
            <div class="thumbnail">
                <img src="http://placehold.it/500x300">
                <div class="caption">
                    <h3>Title</h3>
                    <p>
                        Description Descri ption Descrip tion Descr iption Descrip tion Descr iption Descrip tion Descr iption Des cription
                    </p>
                    <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">@lang("lang.Add_Homework")</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer col-sm-12">
        <a class="btn btn-primary waves-effect btn-backMedia">@lang("lang.Back")</a>
    </div>
</div>
