<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Tarjeta;

class DashboardController extends Controller
{
    public function index()
    {
        // Obtener el usuario autenticado
        $user = Auth::user();
        
        // Obtener el número de cuenta del usuario
        $numeroDeCuenta = $user->numero_de_cuenta;
        
        // Guardar el número de cuenta en la sesión
        Session::put('numeroDeCuenta', $numeroDeCuenta);
        
        // Consultar la tabla 'tarjeta' para obtener el saldo disponible
        $tarjeta = Tarjeta::where('numero_cuenta', $numeroDeCuenta)->first();
        
        // Verificar si se encontró una tarjeta para el número de cuenta
        if ($tarjeta) {
            // Obtener el saldo disponible de la tarjeta
            $saldoDisponible = $tarjeta->saldo_disponible;
            
            // Guardar el saldo disponible en la sesión
            Session::put('saldoDisponible', $saldoDisponible);
        } else {
            // Si no se encontró una tarjeta para el número de cuenta, asignar un valor predeterminado o manejar el caso según tu lógica
            Session::put('saldoDisponible', 0);
        }
        
        // Obtener el nombre del usuario
        $nombre = $user->name;
        
        // Guardar el nombre en la sesión
        Session::put('nombre', $nombre);

        // Pasar los datos a la vista 'feed'
        return view('feed', compact('numeroDeCuenta', 'nombre', 'saldoDisponible'));
    }
}
