<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensualidadesController extends Controller
{
    public function showMensualidad()
    {
        return view('mensualidad');
    }
}
