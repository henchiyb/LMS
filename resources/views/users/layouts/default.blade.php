<!DOCTYPE html>
<html lang="en">
    @include('users.layouts.head')
    @yield('inline_styles')
    <body>
        @include('users.layouts.header')
        <!--Content-->
        @yield('content')
        <!--./Content -->
        @include('users.layouts.footer')
        @yield('inline_scripts')
    </body>
</html>
