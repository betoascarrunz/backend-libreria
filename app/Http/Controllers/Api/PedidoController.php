<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Pedido::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_cliente' => ['required', 'string', 'max:255'],
            'fecha' => ['required', 'date'],
            'producto_id' => ['required', 'integer', 'exists:productos,id'],
            'cantidad' => ['required', 'integer', 'min:1'],
            'prioridad' => ['required', 'string', 'max:50'],
            'estado' => ['required', 'string', 'max:50'],
        ]);

        $pedido = Pedido::create($validated);

        return response()->json($pedido, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        return response()->json($pedido);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        $validated = $request->validate([
            'nombre_cliente' => ['sometimes', 'required', 'string', 'max:255'],
            'fecha' => ['sometimes', 'required', 'date'],
            'producto_id' => ['sometimes', 'required', 'integer', 'exists:productos,id'],
            'cantidad' => ['sometimes', 'required', 'integer', 'min:1'],
            'prioridad' => ['sometimes', 'required', 'string', 'max:50'],
            'estado' => ['sometimes', 'required', 'string', 'max:50'],
        ]);

        $pedido->update($validated);

        return response()->json($pedido);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();

        return response()->noContent();
    }
}
