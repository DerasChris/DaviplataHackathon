<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PagosUniverdsidad;

class PagoUniversidadController extends Controller
{
    public function procesarPago(Request $request)
{
    // Validar los datos recibidos
    $request->validate([
        'numero_cuenta' => 'required|string',
        'carnet_usuario_universidad' => 'required|string',
        'monto' => 'required|numeric',
        'estado_pago' => 'required|string',
        'id_tipo_pago' => 'required|integer',
        'veces_pagado' => 'required|integer',
    ]);

    // Crear un nuevo pago
    $pago = new PagosUniversidad();
    $pago->numero_cuenta = $request->numero_cuenta;
    $pago->carnet_usuario_universidad = $request->carnet_usuario_universidad;
    $pago->monto = $request->monto;
    $pago->fecha_pago = $request->fecha_pago;
    $pago->fecha_vencimiento = $request->fecha_vencimiento;
    $pago->estado_pago = $request->estado_pago;
    $pago->id_tipo_pago = $request->id_tipo_pago;
    $pago->veces_pagado = $request->veces_pagado;

    // Guardar el pago en la base de datos
    $pago->save();

    return response()->json(['message' => 'Pago procesado correctamente'], 200);
}

}
