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
    <script src="{{ asset('js/qrcode.min.js') }}"></script>


</head>

<body class="container">
    @include('layouts.header')

    <section>
        <main>
            <h2>Tu negocio: Ingreso de productos</h2>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <br>
            <span>Mi saldo es: US: ${{ session('saldoDisponible')}}</span>
            <br>
        </main>
    </section>
    <div class="comt">
    <form id="productForms" action="{{ route('addprod') }}" method="POST">
    @csrf
        <div class="form-groups">
            <label class="form-labels" for="nombre_producto">Nombre del Producto</label>
            <input class="form-inputs" type="text" id="nombre_producto" name="nombre_producto" required>
        </div>
        <div class="form-groups flex-rows">
            <div class="form-subgroups">
                <label class="form-labels" for="cantidad_stock">Cantidad en Stock</label>
                <input class="form-inputs" type="number" id="cantidad_stock" name="cantidad_stock" required>
            </div>
            <div class="form-subgroups">
                <label class="form-labels" for="precio">Precio</label>
                <input class="form-inputs" type="decimal" id="precio" name="precio" required>
            </div>
        </div>
        <button class="form-buttons" type="submit">Enviar</button>
    </form>

    <h2>Productos Agregados:</h2>
    <div class="productos-lista">
        <table class="productos-tabla">
            <thead>
                <tr>
                    <th>Nombre del Producto</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th >Pago QR</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre_producto }}</td>
                        <td>{{ $producto->cantidad_stock }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td><button class="vender-btn" data-precio="{{ $producto->precio }}">Vender</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


     <!-- Overlay para el código QR -->
<div id="overlay" style="display: none;">
    <div id="qr-container"></div>
    <p id="precio-text"></p>
    <button id="cerrar-overlay">Cerrar</button>
</div>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script> // Obtener todos los botones de "Vender"
    document.addEventListener('DOMContentLoaded', function() {
    const venderBtns = document.querySelectorAll('.vender-btn');
    const overlay = document.getElementById('overlay');
    const cerrarOverlayBtn = document.getElementById('cerrar-overlay');

    venderBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const precio = btn.getAttribute('data-precio');
            
            overlay.style.display = 'block';

            const qrContainer = document.getElementById('qr-container');
            qrContainer.innerHTML = '';
            const qr = new QRCode(qrContainer, {
                text: 'Numero de Cuenta: ' + '{{ session('numeroDeCuenta') }}' + ', Precio: ' + precio,
                width: 256,
                height: 256
            });

            const precioText = document.getElementById('precio-text');
            precioText.textContent = 'Precio: ' + precio;
        });
    });

    cerrarOverlayBtn.addEventListener('click', () => {
        overlay.style.display = 'none';
    });
});
    </script>
    
</body>

</html>