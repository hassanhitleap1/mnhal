@extends('layout.app')
@section('title',  __('lang.View_Chat'))
@section('content')
<div class="block-header">
    <h2>@yield('title')</h2>
</div>

<div class="content">
    <div class="body">
        <div class="row clearfix">
            <div class="chat">
                <ul>
                    <li class="other">
                        <a class="user" href="#"><img alt="" src="/images/user.png" /></a>
                        <div class="date">
                            2 minutes ago
                        </div>
                        <div class="message">
                            <div class="hider">
                                <span>Click to read</span>
                            </div>
                            <p>
                                Itaque quod et dolore accusantium. Labore aut similique ab voluptas rerum quia. Reprehenderit voluptas doloribus ut nam tenetur ipsam.
                            </p>
                        </div>
                    </li>
                    <li class="other">
                        <a class="user" href="#"><img alt="" src="/images/user.png" /></a>
                        <div class="date">
                            5 minutes ago
                        </div>
                        <div class="message">
                            <div class="hider">
                                <span>Click to read</span>
                            </div>
                            <p>
                                Modi ratione aliquid non. Et porro deserunt illum sed velit necessitatibus. Quis fuga et et fugit consequuntur. Et veritatis fugiat veniam pariatur maxime iusto aperiam.
                            </p>
                        </div>
                    </li>
                    <li class="you">
                        <a class="user" href="#"><img alt="" src="/images/user.png" /></a>
                        <div class="date">
                            7 minutes ago
                        </div>
                        <div class="message">
                            <div class="hider">
                                <span>Click to read</span>
                            </div>
                            <p>
                                Provident impedit atque nemo culpa et modi molestiae. Error non dolorum voluptas non a. Molestiae et nobis nisi sed.
                            </p>
                        </div>
                    </li>
                    <li class="other">
                        <a class="user" href="#"><img alt="" src="/images/user.png" /></a>
                        <div class="date">
                            8 minutes ago
                        </div>
                        <div class="message">
                            <div class="hider">
                                <span>Click to read</span>
                            </div>
                            <p>
                                Id vel ducimus perferendis fuga excepturi nulla. Dolores dolores amet et laborum facilis. Officia magni ut non autem et qui incidunt. Qui similique fugit vero porro qui cupiditate.
                            </p>
                        </div>
                    </li>
                    <li class="you">
                        <a class="user" href="#"><img alt="" src="/images/user.png" /></a>
                        <div class="date">
                            10 minutes ago
                        </div>
                        <div class="message">
                            <div class="hider">
                                <span>Click to read</span>
                            </div>
                            <p>
                                Provident impedit atque nemo culpa et modi molestiae. Error non dolorum voluptas non a. Molestiae et nobis nisi sed.
                            </p>
                        </div>
                    </li>
                    <li class="you">
                        <a class="user" href="#"><img alt="" src="/images/user.png" /></a>
                        <div class="date">
                            10 minutes ago
                        </div>
                        <div class="message">
                            <div class="hider">
                                <span>Click to read</span>
                            </div>
                            <p>
                                Est ut at eum sed perferendis ea hic. Tempora perspiciatis magnam aspernatur explicabo ea. Sint atque quod.
                            </p>
                        </div>
                    </li>
                </ul>
                <input class="textarea" type="text" placeholder="Type here!">
                <a class="btn btn-primary waves-effect float-right go-button">GO</a>
            </div>
        </div>
    </div>
</div>
@endsection
