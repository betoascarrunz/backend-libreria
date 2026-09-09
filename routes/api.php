<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PedidoController;
use App\Http\Controllers\Api\VentaController;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\DashboardController;

Route::post('/auth/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/auth/logout', [AuthController::class, 'logout']);
    Route::get('/auth/user', [AuthController::class, 'user']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('productos', ProductoController::class);
    Route::apiResource('ventas', VentaController::class);
    Route::apiResource('pedidos', PedidoController::class);
    Route::get('/dashboard/totales', [DashboardController::class, 'totales']);
    Route::get('/dashboard/ultimos-pedidos', [DashboardController::class, 'ultimosPedidos']);
    Route::get('/dashboard/ultimas-ventas', [DashboardController::class, 'ultimasVentas']);
});

