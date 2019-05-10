<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Procurement Admin Panel</title>

        @include('Include/css')

        @yield('page_css')

        <link rel="shortcut icon" href="{{url('/')}}/public/asset/images/favicon.png" />
    </head>

    <body>
        <div class="container-scroller">

            <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
                @include('Include.top_nav')
                @include('Include.bottom_nav')
            </nav>

            <div class="container-fluid page-body-wrapper">
                <div class="main-panel">
                    <div class="content-wrapper" style="max-width: 95%;">
                        @yield('content')
                    </div>

                    @include('Include.footer')

                </div>
            </div>

        </div>

        @include('Include/scripts')

        @if(Session::has('message'))
            <script>
                toastr.options.timeOut = 3000;
                toastr.options.closeButton = false;
                toastr.options.progressBar = false;
                toastr.options.positionClass = "toast-bottom-right";
                toastr.success("{{ Session::get('message') }}", {timeOut: 4000})
            </script>
        @endif

        @yield('page_scripts')

    </body>


</html>
