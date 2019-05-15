@include('includes.header')
<!--************************************
            Home Slider Start
    *************************************-->
<div>
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif
</div>

@yield('content')


@include('includes.footer')