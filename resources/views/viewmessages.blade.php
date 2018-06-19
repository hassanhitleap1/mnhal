@extends('layout.app')
@section('title',  __('lang.View_Messages'))
@section('content')
<div class="block-header">
    <h2>@yield('title')</h2>
</div>
<div class="content">
    <div class="body">
        <div class="row clearfix view-messages-container">
            <ul class="menu">
                    <li>
                        <a href="{{url('/')."/".Lang::getLocale()}}/viewchat">
                            <div class="icon-circle bg-light-green">
                                <img src="/images/user.png" width="48" height="48" alt="User" />
                            </div>
                            <div class="menu-info">
                                <h4>Oday alkouz</h4>
                                <p>
                                    <i class="material-icons">access_time</i> 14 mins ago
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/')."/".Lang::getLocale()}}/viewchat">
                            <div class="icon-circle bg-cyan">
                                <img src="/images/user.png" width="48" height="48" alt="User" />
                            </div>
                            <div class="menu-info">
                                <h4>Hussam abu kadija</h4>
                                <p>
                                    <i class="material-icons">access_time</i> 22 mins ago
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/')."/".Lang::getLocale()}}/viewchat">
                            <div class="icon-circle bg-red">
                                <img src="/images/user.png" width="48" height="48" alt="User" />
                            </div>
                            <div class="menu-info">
                                <h4>Khalid alomairi</h4>
                                <p>
                                    <i class="material-icons">access_time</i> 3 hours ago
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/')."/".Lang::getLocale()}}/viewchat">
                            <div class="icon-circle bg-orange">
                                <img src="/images/user.png" width="48" height="48" alt="User" />
                            </div>
                            <div class="menu-info">
                                <h4>Nancy humad</h4>
                                <p>
                                    <i class="material-icons">access_time</i> 2 hours ago
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/')."/".Lang::getLocale()}}/viewchat">
                            <div class="icon-circle bg-blue-grey">
                                <img src="/images/user.png" width="48" height="48" alt="User" />
                            </div>
                            <div class="menu-info">
                                <h4>Mahmoud</h4>
                                <p>
                                    <i class="material-icons">access_time</i> 4 hours ago
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/')."/".Lang::getLocale()}}/viewchat">
                            <div class="icon-circle bg-light-green">
                                <img src="/images/user.png" width="48" height="48" alt="User" />
                            </div>
                            <div class="menu-info">
                                <h4>Osaid</h4>
                                <p>
                                    <i class="material-icons">access_time</i> 3 hours ago
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/')."/".Lang::getLocale()}}/viewchat">
                            <div class="icon-circle bg-purple">
                                <img src="/images/user.png" width="48" height="48" alt="User" />
                            </div>
                            <div class="menu-info">
                                <h4>Naheel naser</h4>
                                <p>
                                    <i class="material-icons">access_time</i> Yesterday
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
        </div>
    </div>
</div>
@endsection
