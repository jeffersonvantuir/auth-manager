<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="{{ asset('jeffersonvantuir/auth-manager/css/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('jeffersonvantuir/auth-manager/css/tailwindcss.css') }}">
        <link rel="stylesheet" href="{{ asset('jeffersonvantuir/auth-manager/css/app.css') }}">

        <script type="module" src="{{ asset('jeffersonvantuir/auth-manager/js/jquery-3.6.0.min.js') }}"></script>
        {{-- <script type="module" src="{{ asset('jeffersonvantuir/auth-manager/js/bootstrap.bundle.min.js') }}"></script> --}}
        

        @yield('extracss')
        @yield('extrajs')
    </head>

    <body class="bg-gray-200">
        <div id="app">
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>
