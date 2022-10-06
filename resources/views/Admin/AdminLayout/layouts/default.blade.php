<!DOCTYPE html>
<html lang="en">
    <head>
    @include('Admin.AdminLayout.includes.header')
    </head>
    <body class="sb-nav-fixed">
    @include('Admin.AdminLayout.includes.nav')

        <div id="layoutSidenav">
            @include('Admin.AdminLayout.includes.sidenav')

            <div id="layoutSidenav_content">
                @yield('main')
                @include('Admin.AdminLayout.includes.footer')
            </div>
        </div>
    </body>
</html>
