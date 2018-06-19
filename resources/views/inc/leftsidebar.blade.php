<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="/images/user.png" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">oday alkouz</div>
            <div class="email">manhal@gmail.com</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="{{url('/')."/".Lang::getLocale()}}/userprofile"><i class="material-icons">person</i>@lang('lang.User_Profile')</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Text</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ol class="breadcrumb">
            <li><a href="">page 1</a></li>
            <li><a href="">page 2</a></li>
            <li class="active">page 3</li>
        </ol>
        <ul class="list">
            <li class="active" {{ Request::is('/url') ? ' class="active"' : null }}>
                <a href="{{url('/')."/".Lang::getLocale()}}/">
                    <i class="flaticon-home-page fi"></i>
                    <span>@lang('lang.Home')</span>
                </a>
            </li>
            <li>
                <a href="{{url('/')."/".Lang::getLocale()}}/admins">
                    <i class="flaticon-management fi"></i>
                    <span>@lang('lang.Admins')</span>
                </a>
            </li>
            <li >
                <a href="{{url('/')."/".Lang::getLocale()}}/teachers">
                    <i class="flaticon-teacher-pointing-blackboard fi"></i>
                    <span>@lang('lang.Teachers')</span>
                </a>
            </li>
            <li>
                <a href="{{url('/')."/".Lang::getLocale()}}/students">
                    <i class="flaticon-school fi"></i>
                    <span>@lang('lang.Students')</span>
                </a>
            </li>
            <li>
                <a href="{{url('/')."/".Lang::getLocale()}}/parents">
                    <i class="flaticon-parents fi"></i>
                    <span>@lang('lang.Parents')</span>
                </a>
            </li>
            <li>
                <a href="{{url('/')."/".Lang::getLocale()}}/levels">
                    <i class="flaticon-games fi"></i>
                    <span>@lang('lang.Levels')</span>
                </a>
            </li>
            <li>
                <a href="/">
                    <i class="flaticon-lesson fi"></i>
                    <span>@lang('lang.Classes')</span>
                </a>
            </li>
            <li>
                <a href="/">
                    <i class="flaticon-multiple-users-silhouette fi"></i>
                    <span>@lang('lang.Groups')</span>
                </a>
            </li>
            <li>
                <a href="{{url('/')."/".Lang::getLocale()}}/category">
                    <i class="flaticon-category fi"></i>
                    <span>@lang('lang.Categories')</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="flaticon-standard-of-quality fi"></i>
                    <span>@lang('lang.Standards')</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="javascript:void(0);">
                            <span>@lang('lang.Domains')</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span>@lang('lang.Pivots')</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span>@lang('lang.Standards')</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span>@lang('lang.Competencies')</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/">
                    <i class="flaticon-business-people-meeting fi"></i>
                    <span>@lang('lang.Lessons')</span>
                </a>
            </li>
            <li>
                <a href="{{url('/')."/".Lang::getLocale()}}/homework">
                    <i class="flaticon-homework fi"></i>
                    <span>@lang('lang.Homework')</span>
                </a>
            </li>
            <li>
                <a href="/">
                    <i class="flaticon-test fi"></i>
                    <span>@lang('lang.Exams')</span>
                </a>
            </li>
            <li>
                <a href="/">
                    <i class="flaticon-progress fi"></i>
                    <span>@lang('lang.Progress')</span>
                </a>
            </li>
            <li>
                <a href="/">
                    <i class="flaticon-prize-badge-with-star-and-ribbon fi"></i>
                    <span>@lang('lang.Badges')</span>
                </a>
            </li>
            <li>
                <a href="/">
                    <i class="flaticon-calendar-with-a-clock-time-tools fi"></i>
                    <span>@lang('lang.Calendar')</span>
                </a>
            </li>
            <li>
                <a href="{{url('/')."/".Lang::getLocale()}}/schedule">
                    <i class="flaticon-schedule-of-clases fi"></i>
                    <span>@lang('lang.School_schedule')</span>
                </a>
            </li>
            <li>
                <a href="/">
                    <i class="flaticon-computer fi"></i>
                    <span>@lang('lang.Reports')</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="version">
        </div>
        <div class="copyright">
              <a href="javascript:void(0);">All Rights Reserved for Dar Al-Manhal Publishers © 2018</a>.
        </div>

    </div>
    <!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->

