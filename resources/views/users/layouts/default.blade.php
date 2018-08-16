<!DOCTYPE html>
<html lang="en">
    @include('users.layouts.head')
    @yield('inline_styles')
    <body>
        @if(\Request::route()->getName() === 'home')
            @include('users.layouts.home_header')
        @else
            @include('users.layouts.header')
        @endif
        <!--Content-->
        @yield('content')
        <!--./Content -->
        @include('users.layouts.footer')
        @yield('inline_scripts')
    </body>
</html>
