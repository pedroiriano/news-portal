<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('admin.includes.login-meta')
    @stack('css')
</head>
<body>
        @yield('content')
        @include('admin.includes.login-js')
        @stack('js')
</body>
</html>
