<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
         <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Dashboard - Admin</title>
        @include('backend.includes.css')
    </head>
    <body class="sb-nav-fixed">

      @include('backend.includes.nav')

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                  @include('backend.includes.sidebar')
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as : {{ Auth::user()->name }}
                        </div>

                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
           @yield('content')
                @include('backend.includes.footer')
            </div>
        </div>
      @include('backend.includes.js')
    </body>
</html>
