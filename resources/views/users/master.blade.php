<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    {{-- link google font  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    {{-- Link css --}}
    <link href="{{ asset('css/all.css') }} " rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Trang chủ</title>
    {{-- SEO --}}
    <meta name="keywords" content="">
    <meta name="description" content="">
   
</head>
<body>
   {{-- header --}}
   @include('users.partial.header')
   {{-- end header --}}
    {{-- Container --}}
    @yield('content')
    {{-- end Container --}}
   {{-- footer --}}
   @include('users.partial.footer')
   {{-- end footer --}}
   {{-- link script --}}
   @include('users.Login.login')
   <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
   <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>