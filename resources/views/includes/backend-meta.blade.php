{{-- BEGIN::Google Search Meta --}}
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Portal Berita Prokopim Kota Depok">
<meta name="keywords" content="portal, berita, prokopim, kota depok, portal berita, prokopim kota depok, portal berita prokopim, portal berita prokopim kota depok">
<meta name="author" content="Pedro Iriano">
{{-- END::Google Search Meta --}}

{{-- BEGIN::CSRF Token --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- END::CSRF Token --}}

{{-- BEGIN::Title --}}
<title>{{ config('app.name', 'Portal Berita') }}</title>
{{-- END::Title --}}

{{-- BEGIN::Favicons --}}
<link rel="icon" href="{{ asset('backend/assets/images/favicon.png') }}" type="image/x-icon">
<link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" type="image/x-icon">
{{-- END::Favicons --}}

{{-- BEGIN::Vite --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- END::Vite --}}

{{-- BEGIN::Google Font --}}
<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/font-awesome.css') }}">
{{-- END::Google Font --}}

{{-- BEGIN::Ico-font --}}
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/icofont.css') }}">
{{-- END::Ico-font --}}

{{-- BEGIN::Themify Icon --}}
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/themify.css') }}">
{{-- END::Themify Icon --}}

{{-- BEGIN::Flag Icon --}}
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/flag-icon.css') }}">
{{-- END::Flag Icon --}}

{{-- BEGIN::Feather Icon --}}
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/feather-icon.css') }}">
{{-- END::Feather Icon --}}

{{-- BEGIN::Plugins CSS --}}
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/scrollbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/prism.css') }}">
{{-- END::Plugins CSS --}}

{{-- BEGIN::Bootstrap CSS --}}
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/bootstrap.css') }}">
{{-- END::Bootstrap CSS --}}

{{-- BEGIN::App CSS --}}
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
<link id="color" rel="stylesheet" href="{{ asset('backend/assets/css/color-1.css') }}" media="screen">
{{-- END::App CSS --}}

{{-- BEGIN::Responsive CSS --}}
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/responsive.css') }}">
{{-- END::Responsive CSS --}}
