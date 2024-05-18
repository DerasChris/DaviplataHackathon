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
</head>

<body class="container">
    @include('layouts.header')

    <section>
        <main>
            <h2>PAGO DE UNIVERSIDAD</h2>
            <br>
            <span>Mi saldo es: US: ${{ session('saldoDisponible')}}</span>
            <br>
        </main>
    </section>
    <div class="comt">
        <h4>Aranceles</h4>
        <button class="btn active">Mensualidad</button>
        <button class="btn">Seminarios</button>
        <button class="btn">Tickets de Parqueo</button>
        <button class="btn">Otros</button>

        <button class="btn-c" ><a href="{{ route('mens') }}">Continuar</a></button>

    </div>
    
    <script src="{{ asset('js/functions.js') }}"></script>
</body>

</html>