<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body class="bg-login min-h-screen">
        <div class="form-box login">
            <div class="form-details">
                <a href="/">
                    <img src="{{ asset('img/image.png')}}" alt="" srcset="">
                </a>
                <h1>¡BIENVENIDO!</h1>
            </div>
            <div class="form-content">
                {{ $slot }}
            </div>
        </div>
        <!-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg">
                    </div> -->
    </body>
</html>
