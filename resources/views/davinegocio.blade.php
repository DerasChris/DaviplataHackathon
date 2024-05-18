<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DAVIPLATA</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="container">
    @include('layouts.header')

    <section>
        <span class="textCuenta">Tu Negocio</span>
        <br>
        <span class="textCuenta">Mi Saldo es:</span>
        <main>
            <SPAN class="m-5">Productividad.</SPAN>
            <div class="boton-group">
                <x-primary-button class="ml-4">
                    {{ __('Registro de Ventas') }}
                </x-primary-button>
            </div>
            <div class="boton-group">
                <x-primary-button class="ml-4">
                    {{ __('Control de Ventas') }}
                </x-primary-button>
            </div>
            <div class="boton-group">
                <x-primary-button class="ml-4">
                    {{ __('Pagos con QR') }}
                </x-primary-button>
            </div>
            <div class="boton-group">
                <x-primary-button class="ml-4">
                    {{ __('Ganacias') }}
                </x-primary-button>
            </div>
            <div class="boton-group">
                <x-primary-button class="ml-4 boton-item">
                    {{ __('Conitnuar') }}
                </x-primary-button>
            </div>
            <div class="">
                <p>Informacion del boton seleccionado</p>
            </div>
        </main>
    </section>
    <script src="{{ asset('js/functions.js') }}"></script>
</body>

</html>