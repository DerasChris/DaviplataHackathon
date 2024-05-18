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
    <span class="textCuenta">{{ session('nombre')}}</span>
                <br>
                <span class="textCuenta">Mi cuenta es: {{ session('numeroDeCuenta') }}</span>
        <main>
            <div class="circle">
                <SPAN>MI SALDO</SPAN>
                <span>US $ 5.00</span>
            </div>
            <SPAN class="m-5">Depósitos garantizados por IGD de conformidad a lo regulado por la ley de bancos.</SPAN>
            <span>Recuerde: monto máximo por transacción $1095.00 y acumulado en depósitos al mes $2190.00</span>
        </main>
    </section>
    <script src="{{ asset('js/functions.js') }}"></script>
</body>

</html>