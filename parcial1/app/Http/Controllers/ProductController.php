<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class ProductController extends Controller
{
    
    public function index()
    {
        $categorias = Categoria::all();
        return view('products.index', compact('categorias'));
    }

    
    public function show()
    {
        $productos = Producto::with('categoria')->get();
        return view('products.show', compact('productos'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'categoria_id' => 'required|exists:categorias,id'
        ]);

        Producto::create($request->all());

        return redirect()->route('products.show')
                         ->with('success', 'Producto registrado correctamente');
    }
}