<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Track&Trace') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('public/css/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/build/assets/app-lhA9k1qk.css') }}" />
</head>
<body class="hold-transition">
    <div class="wrapper">
        @yield('content')
    </div>
    <script src="{{ asset('public/build/assets/app-j-67PNC3.js') }}" defer></script>
    <script src="{{ asset('public/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/js/adminlte.min.js') }}" defer></script>
</body>
</html>
