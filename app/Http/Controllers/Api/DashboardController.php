<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\Venta;
use App\Models\Pedido;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function totales()
    {
        $totalProductos = Producto::count();
        $totalVentas = Venta::sum('total');
        $totalPedidos = Pedido::count();

        return response()->json([
            'total_productos' => $totalProductos,
            'total_ventas' => $totalVentas,
            'total_pedidos' => $totalPedidos
        ],200);
    }
    public function ultimosPedidos()
    {
        $ultimosPedidos = Pedido::with('producto:id,nombre')->orderBy('created_at', 'desc')->take(2)->get();

        return response()->json($ultimosPedidos, 200);
    }
    public function ultimasVentas()
    {
        $ultimasVentas = Venta::with('producto:id,nombre')->orderBy('created_at', 'desc')->take(2)->get();

        return response()->json($ultimasVentas, 200);
    }
}
