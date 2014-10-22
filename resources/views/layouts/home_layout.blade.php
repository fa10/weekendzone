<!DOCTYPE html>
<html>
    <head>
        <title>Weekendzone // </title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Weekendzone">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    @include('layouts.partials._fav_icons')
    @include('layouts.partials._css_files')

    </head>
    <body class="appear-animate">
        <div class="page" id="top">

            <!-- Home Search Content Area -->
            @yield('homesection')

            @include('layouts.partials._nav_home')

            <!-- New events Content Area -->
            @yield('newevents')

            @include('layouts.partials._footer')

         </div>

        @include('layouts.partials._scripts')

    </body>
</html>
