// Obtener referencias a elementos DOM
const overlay = document.getElementById('overlay');
const pagarBtn = document.getElementById('pagarBtn');
const aceptarBtn = document.getElementById('aceptarBtn');
const cancelarBtn = document.getElementById('cancelarBtn');

// Mostrar overlay y cuadro de diálogo cuando se hace clic en "Pagar"
pagarBtn.addEventListener('click', function() {
  overlay.style.display = 'block';
});

// Ocultar overlay y cuadro de diálogo cuando se hace clic en "Cancelar"
cancelarBtn.addEventListener('click', function() {
  overlay.style.display = 'none';
});

// Mostrar animación Lottie cuando se hace clic en "Aceptar"
aceptarBtn.addEventListener('click', function() {
    // Enviar los datos al backend
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/procesar-pago');
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Redirigir a la página de confirmación de pago
            window.location.href = '/dashboard';
        } else {
            console.error('Hubo un error al procesar el pago');
            window.location.href = '/dashboard';
        }
    };
    const data = {
        numero_cuenta: numeroCuenta,
        carnet_usuario_universidad: "2513872020",
        monto: 300.00,

        estado_pago: "PAGADP",
        id_tipo_pago: 1,
        veces_pagado: 3
    };
    xhr.send(JSON.stringify(data));
});

  // Ocultar overlay y cuadro de diálogo después de un tiempo
 