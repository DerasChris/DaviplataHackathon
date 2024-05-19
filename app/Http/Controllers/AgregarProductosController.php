<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class AgregarProductosController extends Controller
{
    public function index()
    {
        // Obtener todos los productos
        $productos = Producto::all();

        // Pasar los productos a la vista
        return view('agregarproductos', compact('productos'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre_producto' => 'required|string|max:255',
            'cantidad_stock' => 'required|integer',
            'precio' => 'required|numeric',
        ]);

        // Crear el producto
        Producto::create([
            'nombre_producto' => $request->nombre_producto,
            'cantidad_stock' => $request->cantidad_stock,
            'precio' => $request->precio,
        ]);

        // Redirigir de nuevo al formulario con un mensaje de éxito
        return redirect()->route('addprod')->with('success', 'Producto agregado exitosamente');
    }
}
