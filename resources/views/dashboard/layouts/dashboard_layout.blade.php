<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dashboard // Weekendzone</title>
        @include('layouts.partials._fav_icons')
        @include('layouts.partials._css_files')
    </head>
    <body>
        <div class="page">
            @include('dashboard.layouts.partials._nav_dashboard')
            @yield('content')
        </div>

        <!-- Scripts -->
        @include('layouts.partials._scripts')
    </body>
</html>