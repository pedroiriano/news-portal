<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('admin.includes.meta')
    @stack('css')
</head>
<body>
        @yield('content')
        @include('admin.includes.js')
        @stack('js')
</body>
</html>
