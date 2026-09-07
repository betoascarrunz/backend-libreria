<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        $productos = [
            ['nombre' => 'El principito', 'categoria' => 'Literatura', 'precio' => 12.50, 'stock' => 25],
            ['nombre' => 'Cien años de soledad', 'categoria' => 'Novela', 'precio' => 18.00, 'stock' => 15],
            ['nombre' => 'Clean Code', 'categoria' => 'Programacion', 'precio' => 35.90, 'stock' => 10],
            ['nombre' => 'Don Quijote de la Mancha', 'categoria' => 'Clasicos', 'precio' => 22.75, 'stock' => 12],
            ['nombre' => 'Sapiens', 'categoria' => 'Historia', 'precio' => 28.50, 'stock' => 8],
            ['nombre' => 'Harry Potter y la piedra filosofal', 'categoria' => 'Fantasia', 'precio' => 16.90, 'stock' => 20],
            ['nombre' => '1984', 'categoria' => 'Ciencia ficcion', 'precio' => 14.25, 'stock' => 18],
            ['nombre' => 'El arte de la guerra', 'categoria' => 'Ensayo', 'precio' => 10.00, 'stock' => 14],
            ['nombre' => 'Orgullo y prejuicio', 'categoria' => 'Romance', 'precio' => 13.80, 'stock' => 11],
            ['nombre' => 'Introduccion a PHP', 'categoria' => 'Programacion', 'precio' => 30.00, 'stock' => 7],
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}
