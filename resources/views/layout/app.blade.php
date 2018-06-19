@include('inc.header')
<section>
    @include('inc.leftsidebar')
    @include('inc.rightsidebar')
</section>
<div id="super_content">
@yield('content')
</div>
@include('inc.footer')
