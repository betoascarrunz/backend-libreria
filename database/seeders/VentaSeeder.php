<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Database\Seeder;

class VentaSeeder extends Seeder
{
    public function run(): void
    {
        $productos = Producto::query()->orderBy('id')->get();
        $ventas = [
            ['nombre_cliente' => 'Ana Lopez', 'fecha' => '2026-01-05', 'cantidad' => 1, 'metodo_pago' => 'Tarjeta', 'total' => 12.50],
            ['nombre_cliente' => 'Carlos Perez', 'fecha' => '2026-01-07', 'cantidad' => 2, 'metodo_pago' => 'Efectivo', 'total' => 36.00],
            ['nombre_cliente' => 'Maria Garcia', 'fecha' => '2026-01-10', 'cantidad' => 1, 'metodo_pago' => 'Transferencia', 'total' => 35.90],
            ['nombre_cliente' => 'Luis Torres', 'fecha' => '2026-01-12', 'cantidad' => 1, 'metodo_pago' => 'Tarjeta', 'total' => 22.75],
            ['nombre_cliente' => 'Sofia Martinez', 'fecha' => '2026-01-15', 'cantidad' => 2, 'metodo_pago' => 'Efectivo', 'total' => 57.00],
            ['nombre_cliente' => 'Diego Sanchez', 'fecha' => '2026-01-18', 'cantidad' => 1, 'metodo_pago' => 'Tarjeta', 'total' => 16.90],
            ['nombre_cliente' => 'Laura Rodriguez', 'fecha' => '2026-01-20', 'cantidad' => 3, 'metodo_pago' => 'Transferencia', 'total' => 42.75],
            ['nombre_cliente' => 'Jorge Flores', 'fecha' => '2026-01-22', 'cantidad' => 1, 'metodo_pago' => 'Efectivo', 'total' => 10.00],
            ['nombre_cliente' => 'Elena Vargas', 'fecha' => '2026-01-25', 'cantidad' => 2, 'metodo_pago' => 'Tarjeta', 'total' => 27.60],
            ['nombre_cliente' => 'Miguel Castillo', 'fecha' => '2026-01-28', 'cantidad' => 1, 'metodo_pago' => 'Transferencia', 'total' => 30.00],
        ];

        foreach ($ventas as $index => $venta) {
            Venta::create($venta + ['producto_id' => $productos[$index]->id]);
        }
    }
}
