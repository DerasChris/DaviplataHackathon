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
            <h2>PAGO DE MENSUALIDAD</h2>
            <br>
            <h3>CICLO 01-2024</h2>
            <br>
            <span>Mi saldo es: US: ${{ session('saldoDisponible')}}</span>
            <br>
        </main>
    </section>
<div class="checkbox-container">
        <div class="checkbox-button" onclick="toggleCheckbox(this)">
            <label>Matricula $80</label>
            <input type="checkbox" name="matricula" value="80" class="custom-input">
        </div>
        <div class="checkbox-button" onclick="toggleCheckbox(this)">
            <label>Mensualidad 1 $65</label>
            <input type="checkbox" name="mensualidad1" value="65" class="custom-input">
        </div>
        <div class="checkbox-button" onclick="toggleCheckbox(this)">
            <label>Mensualidad 2 $65</label>
            <input type="checkbox" name="mensualidad2" value="65" class="custom-input">
        </div>
        <div class="checkbox-button" onclick="toggleCheckbox(this)">
            <label>Mensualidad 3 $65</label>
            <input type="checkbox" name="mensualidad3" value="65" class="custom-input">
        </div>
        <div class="checkbox-button" onclick="toggleCheckbox(this)">
            <label>Mensualidad 4 $65</label>
            <input type="checkbox" name="mensualidad4" value="65" class="custom-input">
        </div>
        <div class="checkbox-button" onclick="toggleCheckbox(this)">
            <label>Mensualidad 5 $65</label>
            <input type="checkbox" name="mensualidad5" value="65"  class="custom-input">
        </div>
</div>

<div id="total">
    Total: $<span id="total-amount">0</span>
</div>

<div class="center">
<button class="btn-c" id="pagarBtn" ><a href="" class="reset-a-white">Pagar</a></button>
</div>

<div id="overlay">
  <!-- Cuadro de diálogo -->
  <div id="dialog">
    <h2>¿Estás seguro que deseas pagar?</h2>
    <div>
    <button id="aceptarBtn">Aceptar</button>
    <button id="cancelarBtn">Cancelar</button>
    </div>
  </div>
</div>

<div id="lottie-container"></div>
<script>
    var numeroCuenta = '{{ session('numero_cuenta') }}';
</script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="{{ asset('js/checks.js') }}"></script>
    <script src="{{ asset('js/animated.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/lottie-web@5.7.7/build/player/lottie.min.js"></script>
    
</body>

</html>