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
    <div class="form-container">
            <form action="{{ route('custom.login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="universidad">Universidad</label>
                <select name="universidad" id="universidad">
                    <option value="">Selecciona una universidad</option>
                    <option value="universidad1">Universidad 1</option>
                    <option value="universidad2">Universidad 2</option>
                    <option value="universidad3">Universidad 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="carnet">Carnet</label>
                <input type="number" name="carnet" id="carnet">
                @error('carnet')
        <span class="error">{{ $message }}</span>
    @enderror
            </div>
            <div class="form-group">
                <label for="clave">Clave</label>
                <input type="password" name="password" id="password">
                @error('password')
        <span class="error">{{ $message }}</span>
    @enderror
            </div>
            <button type="submit" class="submit-btn">Continuar</button>
        </form>
            </div>
    </div>
    <script src="{{ asset('js/functions.js') }}"></script>
</body>

</html>