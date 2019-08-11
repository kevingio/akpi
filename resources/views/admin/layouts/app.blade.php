<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>@yield('title', 'Asosiasi Konselor Pastoral Indonesia')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('admin.layouts.parts.header')
    @yield('content')
    @include('admin.layouts.parts.footer')
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
