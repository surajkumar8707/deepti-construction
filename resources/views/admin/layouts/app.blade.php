<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
    <title>Title</title>
    <link rel="icon" type="image/x-icon" href="#" />
    @vite('resources/sass/app.scss')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <style>
        .main-loader-please-wait {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #000000d6;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 999999999;
        }

        .main-loader-please-wait .loader-container {
            text-align: center;
            position: absolute;
        }

        .main-loader-please-wait .loader-container .loader {
            border: 4px solid rgba(0, 0, 0, 0.3);
            border-top: 4px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 0 auto 10px;
        }

        .main-loader-please-wait .loader-container .loading-message {
            font-size: 18px;
            font-weight: bold;
        }

        @keyframes  spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .content-wrapper>.content{
            padding: 0 0.5rem;
            height: 90vh !important;
            overflow: auto;
        }
    </style>
    @stack('styles')
</head>

<body class="hold-transition sidebar-mini">
    <div class="main-loader-please-wait" style="display: none;">
        <div class="loader-container">
            <div class="loader"></div>
            <p class="loading-message text-white">Please Wait ...</p>
        </div>
    </div>
    <div class="wrapper" style="position: unset;">
        @include('admin.partial.top-navbar')
        @include('admin.partial.asidebar')
        @yield('content')
        @include('admin.partial.footer')
    </div>

    <script>
        var base_url = "{{ url('admin/') }}";
    </script>
    @vite('resources/js/app.js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('js/adminlte.min.js') }}" defer></script>
    <script src="{{ asset('js/datatables.min.js') }}" defer></script>
    <script src="{{ asset('js/sweetalert2.min.js') }}" defer></script>
    <script src="{{ asset('js/select2.min.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    @stack('scripts')
</body>
</html>
{{-- http://127.0.0.1:8000/admin/report/get-report?start_date=2023-08-17&end_date=2023-08-17 --}}
