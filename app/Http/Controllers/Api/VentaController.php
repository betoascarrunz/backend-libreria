<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Venta::all());
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
            'metodo_pago' => ['required', 'string', 'max:100'],
            'total' => ['required', 'numeric', 'min:0'],
        ]);

        $venta = Venta::create($validated);

        return response()->json($venta, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Venta $venta)
    {
        return response()->json($venta);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venta $venta)
    {
        $validated = $request->validate([
            'nombre_cliente' => ['sometimes', 'required', 'string', 'max:255'],
            'fecha' => ['sometimes', 'required', 'date'],
            'producto_id' => ['sometimes', 'required', 'integer', 'exists:productos,id'],
            'cantidad' => ['sometimes', 'required', 'integer', 'min:1'],
            'metodo_pago' => ['sometimes', 'required', 'string', 'max:100'],
            'total' => ['sometimes', 'required', 'numeric', 'min:0'],
        ]);

        $venta->update($validated);

        return response()->json($venta);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venta $venta)
    {
        $venta->delete();

        return response()->noContent();
    }
}
