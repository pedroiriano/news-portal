<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.backend-meta')
    @stack('css')
</head>
<body>
    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
            </filter>
        </svg>
    </div>
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        @include('includes.backend-nav')
        @yield('content')
        @include('includes.backend-js')
        @stack('js')
    </div>
</body>
</html>
