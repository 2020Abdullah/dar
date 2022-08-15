<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.min.css') }}">
</head>
<body>
    @yield('Header')
    @yield('SideBar')
    @yield('main')
    @yield('footer')
    @yield('js')
</body>
</html>
