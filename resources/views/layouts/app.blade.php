<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body class="sb-nav-fixed">
        @include('includes.nav')
        <div id="layoutSidenav">
            @include('includes.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                       @yield('content')
                    </div>
                </main>
                @include('includes.footer')
            </div>
        </div>
    @include('includes.script_footer')
    </body>
</html>
