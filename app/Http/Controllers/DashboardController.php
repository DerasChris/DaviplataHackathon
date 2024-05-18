<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
{
    $user = Auth::user();
    $numeroDeCuenta = $user->numero_de_cuenta;
    $nombre = $user->name;

    Session::put('numeroDeCuenta', $numeroDeCuenta);
    Session::put('nombre', $nombre);

    return view('feed', compact('numeroDeCuenta', 'nombre'));
}
}
