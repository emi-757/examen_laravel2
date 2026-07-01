<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
   
    public function index()
    {
        //
        return response()->json(
            Producto::all(),
            200
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $producto = Producto::create([
            'titulo' => $request->titulo,
            'slug' => $request->slug,
            'precio' => $request->precio,
            'descripcion' => $request->descripcion,
            'categoria' => $request->categoria,
        ]);

        return response()->json($producto, 201);
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
         return response()->json($producto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
        $producto->update([
            'titulo' => $request->titulo,
            'slug' => $request->slug,
            'precio' => $request->precio,
            'descripcion' => $request->descripcion,
            'categoria' => $request->categoria,
        ]);

        return response()->json($producto);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
        $producto->delete();

        return response()->json([
            'message' => 'producto eliminado'
        ]);
    }
}

