<?php

namespace Database\Seeders;

use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    public function run(): void
    {
        $productos = Producto::query()->orderBy('id')->get();
        $pedidos = [
            ['nombre_cliente' => 'Andrea Ruiz', 'fecha' => '2026-02-01', 'cantidad' => 1, 'prioridad' => 'Alta', 'estado' => 'Pendiente'],
            ['nombre_cliente' => 'Pedro Morales', 'fecha' => '2026-02-02', 'cantidad' => 2, 'prioridad' => 'Media', 'estado' => 'Procesando'],
            ['nombre_cliente' => 'Gabriela Cruz', 'fecha' => '2026-02-03', 'cantidad' => 1, 'prioridad' => 'Baja', 'estado' => 'Enviado'],
            ['nombre_cliente' => 'Ricardo Leon', 'fecha' => '2026-02-04', 'cantidad' => 1, 'prioridad' => 'Alta', 'estado' => 'Pendiente'],
            ['nombre_cliente' => 'Patricia Mendez', 'fecha' => '2026-02-05', 'cantidad' => 3, 'prioridad' => 'Media', 'estado' => 'Completado'],
            ['nombre_cliente' => 'Fernando Rios', 'fecha' => '2026-02-06', 'cantidad' => 1, 'prioridad' => 'Baja', 'estado' => 'Pendiente'],
            ['nombre_cliente' => 'Valeria Soto', 'fecha' => '2026-02-07', 'cantidad' => 2, 'prioridad' => 'Alta', 'estado' => 'Procesando'],
            ['nombre_cliente' => 'Hector Nunez', 'fecha' => '2026-02-08', 'cantidad' => 1, 'prioridad' => 'Media', 'estado' => 'Enviado'],
            ['nombre_cliente' => 'Daniela Vega', 'fecha' => '2026-02-09', 'cantidad' => 1, 'prioridad' => 'Baja', 'estado' => 'Completado'],
            ['nombre_cliente' => 'Oscar Paredes', 'fecha' => '2026-02-10', 'cantidad' => 1, 'prioridad' => 'Alta', 'estado' => 'Pendiente'],
        ];

        foreach ($pedidos as $index => $pedido) {
            Pedido::create($pedido + ['producto_id' => $productos[$index]->id]);
        }
    }
}
